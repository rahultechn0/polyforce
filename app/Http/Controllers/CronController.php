<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Price;
use App\Models\Package;
use App\Models\Setting;
use App\Models\Transaction;
use App\Models\Metarequest;
use App\Models\Withdrawal;
use App\Models\Packages;
use App\Models\Rewards;
use App\Models\Matchingincome;
use App\Models\Rank;
use Response;
use DB;
use PhpParser\Builder\Trait_;
use Session;
use Illuminate\Support\Carbon;

class CronController extends Controller
{
    //invest verification and given referral income
    public function investCron()
    {
        $settings      = Setting::where("id", 1)->first();
        $requestData   = Metarequest::select("amount", "pLimit", "tokenAmt", "id", "trans_id", "user_id", "curl_response", "checkCount", "error_response", "dailyRoi", "days", "packageId")->where("trans_type", "Package invest")->where("status", "Pending")->where("checkCount", "<", 6)->get();

        foreach ($requestData as $key => $trans) {
            $id          = $trans->id;
            $pLimit      = 0;
            $user_id     = $trans->user_id;
            $trans_id    = $trans->trans_id;
            $tokenAmt    = $trans->tokenAmt;
            $amount      = $trans->amount;
            $curl_response = $trans->curl_response;
            $error_response = $trans->error_response;
            $checkCount  = $trans->checkCount;
            $roi_per     = $trans->dailyRoi;
            $roi_max     = ($trans->days);
            $packageId   = $trans->packageId;
            $userData    = User::select("id", "wallet_address", "levelParent", "packageAmt")->where("status", 1)->where("id", $user_id)->first();

            if ($userData) {
                $transCount = Transaction::select("id")->where("trans_id", $trans_id)->count();
                if ($transCount == 0) {

                    $wallet_address = $userData->wallet_address;

                    $curl           = curl_init();
                    curl_setopt_array($curl, array(
                        CURLOPT_URL => $settings['DEPOSIT_API'] . "?tx_id=" . $trans_id,
                        CURLOPT_RETURNTRANSFER => true,
                        CURLOPT_ENCODING => '',
                        CURLOPT_MAXREDIRS => 10,
                        CURLOPT_TIMEOUT => 0,
                        CURLOPT_FOLLOWLOCATION => true,
                        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                        CURLOPT_CUSTOMREQUEST => 'GET',
                        CURLOPT_HTTPHEADER => array(
                            'Content-Type: application/json'
                        ),
                    ));
                    $response       = curl_exec($curl);

                    curl_close($curl);
                    $responseDecode = json_decode($response, true);

                    $curl_response  = $curl_response . "," . $response;

                    $status       = "";
                    $callAmt      = 0;
                    $contractAddr = "";
                    $fromAddr     = "";

                    if (isset($responseDecode["data"]["status"]) && !empty($responseDecode["data"]["status"])) {
                        $status       = $responseDecode["data"]["status"];
                    }

                    if (isset($responseDecode['data']['logs'][0]['data'])) {
                        $callAmt      = hexdec($responseDecode['data']['logs'][0]['data']);
                        $callAmt      = $callAmt / 10 ** 18;
                    }
                    // echo "amount::".$amount." tokenAmt::".$tokenAmt." callAmt::".$callAmt;die;
                    if (isset($responseDecode['data']['from'])) {
                        $fromAddr     = $responseDecode['data']['from'];
                    }
                    if (isset($responseDecode['data']['to'])) {
                        $contractAddr = $responseDecode['data']['to'];
                    }

                    //Request Update
                    if (empty($responseDecode)) {
                        $error_response  = $error_response . ", Empty Response";
                        Metarequest::where("id", $id)->update(["status" => "Pending", "checkCount" => ($checkCount + 1), "curl_response" => $curl_response, "error_response" => $error_response]);
                    } else if (isset($responseDecode["Error"]) && !empty($responseDecode["Error"])) {
                        $error_response  = $error_response . ", Error in response";
                        Metarequest::where("id", $id)->update(["status" => "Pending", "checkCount" => ($checkCount + 1), "curl_response" => $curl_response, "error_response" => $error_response]);
                    } else if ($status != "SUCCESS") {
                        $error_response  = $error_response . ", failed response";
                        Metarequest::where("id", $id)->update(["status" => "Pending", "checkCount" => ($checkCount + 1), "curl_response" => $curl_response, "error_response" => $error_response]);
                    } else if ($contractAddr != $settings['CONTRACT_ADDRESS']) {
                        $error_response  = $error_response . ", Contract match error";
                        Metarequest::where("id", $id)->update(["status" => "Pending", "checkCount" => ($checkCount + 1), "curl_response" => $curl_response, "error_response" => $error_response]);
                    } else if ((string)$callAmt != (string)$tokenAmt) {
                        $error_response  = $error_response . ", Amount matche error";
                        Metarequest::where("id", $id)->update(["status" => "Pending", "checkCount" => ($checkCount + 1), "curl_response" => $curl_response, "error_response" => $error_response]);
                    } else {

                        // $pLimit = Package::select('days')->where('id',$packageId)->first();
                        // $planExpiryDate  = date("Y-m-d", strtotime($pLimit));
                        // //Referral Entry
                        // $userParent = User::select("levelParent")->where("id", $user_id)->first();
                        // if (!empty($userParent)) {
                        //     $referAMount     = $amount * 0.5;
                        //     Transaction::create(["user_id" => $userParent->levelParent, "refrall_id" => $user_id, "trans" => 3, "amount" => $referAMount, "from_package" => $id, "type" => "Referal Bonus"]);
                        // }
                        ///User data update
                        // User::where("id",$user_id)->increment("packageAmt",$amount);
                        Metarequest::where("id", $id)->update(["status" => "Success", "checkCount" => ($checkCount + 1), "curl_response" => $curl_response]);
                    }

                    $pLimit = Package::select('days')->where('id', $packageId)->first();
                    $expiryDate = $pLimit->days;
                    $planExpiryDate  = date("Y-m-d", strtotime("+ $expiryDate days"));
                    ///Invest Entry
                    $newTransArr     = array("planExpiryDate" => $planExpiryDate, "packageId" => $packageId, "trans_id" => $trans_id, "user_id" => $user_id, "refrall_id" => 0, "amount" => $amount, "from_package" => 0, "roi_per" => $roi_per, "roi_max" => $roi_max, "roi_cnt" => 0, "trans" => 0, "type" => "Package invest");

                    $newEntry        = Transaction::create($newTransArr);
                    User::select('packageAmt')->where('id', $user_id)->update(['packageAmt' => $amount]);

                    //Level Income
                    $userInfo = User::where('id', $user_id)->first();
                    $userId = $userInfo->id;
                    $teamUser = User::select('id')->where('levelParent', $userId)->get();

                    $parent_arr = array();
                    $parent_per = array(0.40, 0.20, 0.15, 0.10, 0.05);

                    if ($userInfo->levelParent) {
                        $parent_id = $userInfo['levelParent'];
                        $user      = User::select("level_str")->where("id", $parent_id)->first();
                        if ($user) {
                            $level_str = $user['level_str'];

                            $array = array_reverse(explode(",", rtrim($level_str, ",")));

                            $array_count = count($array);

                            if ($array_count >= 5) {
                                $array_count = 5;
                            }
                            for ($i = 0; $i < $array_count; $i++) {
                                if ($array[$i] > 0) {
                                    array_push($parent_arr, $array[$i]);
                                }
                            }
                        }
                    }
                    foreach ($parent_arr as $key => $user) {
                        if ($user > 0) {
                            $packageAmt_1    = Transaction::select("amount")->where("user_id", $user)->where("trans", 0)->sum("amount");
                            $teamUser2 = User::select('id')->where('levelParent', $user)->get();
                            $teamSize2 = count($teamUser2);
                            $levelAmt = $amount * $parent_per[$key];
                            $level = $key + 1;
                            if ($packageAmt_1 > 0) {
                                if ($level == 1 && $teamSize2 == 1) {
                                    Transaction::create(["user_id" => $user, "trans" => 2, "amount" => $levelAmt, 'refrall_id' => $user_id, "from_package" => $id, "type" => "Level-" . ($key + 1)]);
                                } elseif ($level == 2 && $teamSize2 == 2) {
                                    Transaction::create(["user_id" => $user, "trans" => 2, "amount" => $levelAmt, 'refrall_id' => $user_id, "from_package" => $id, "type" => "Level-" . ($key + 1)]);
                                } elseif ($level == 3 && $teamSize2 == 3) {
                                    Transaction::create(["user_id" => $user, "trans" => 2, "amount" => $levelAmt, 'refrall_id' => $user_id, "from_package" => $id, "type" => "Level-" . ($key + 1)]);
                                } elseif ($level == 4 && $teamSize2 == 4) {
                                    Transaction::create(["user_id" => $user, "trans" => 2, "amount" => $levelAmt, 'refrall_id' => $user_id, "from_package" => $id, "type" => "Level-" . ($key + 1)]);
                                } elseif ($level == 5 && $teamSize2 == 5) {
                                    Transaction::create(["user_id" => $user, "trans" => 2, "amount" => $levelAmt, 'refrall_id' => $user_id, "from_package" => $id, "type" => "Level-" . ($key + 1)]);
                                }
                            }
                        }
                    }

                    //User data update
                    // User::where("id",$user_id)->increment("packageAmt",$amount);

                    Metarequest::where("id", $id)->update(["status" => "Success", "checkCount" => ($checkCount + 1), "curl_response" => $curl_response]);
                } else {
                    $error_response  = $error_response . ", Duplicate transId";
                    Metarequest::where("id", $id)->update(["status" => "Pending", "checkCount" => ($checkCount + 1), "curl_response" => $curl_response, "error_response" => $error_response]);
                }
            } else {
                $error_response  = $error_response . ", User error";
                Metarequest::where("id", $id)->update(["status" => "Pending", "checkCount" => ($checkCount + 1), "curl_response" => $curl_response, "error_response" => $error_response]);
            }
        }
        Metarequest::where("trans_type", "Package invest")->where("status", "Pending")->where("checkCount", 6)->update(["status" => "Failed"]);
    }

    //devide roi to self user (cron runs daily bases)
    public function roiCron()
    {
        dd("Roi plan not active in this project");
        $requestData = Transaction::select('id', 'amount', 'user_id', 'roi_per', 'roi_cnt', 'packageId')->where('type', 'Package invest')->where('trans', '0')->get();

        foreach ($requestData as $trans) {
            $id = $trans->id;
            $amount = $trans->amount;
            $packageId = $trans->packageId;
            $user_id = $trans->user_id;
            $roiCount = $trans->roi_cnt;
            //for packages
            $packages = Package::where('id', $packageId)->first();
            $roiPer =  $packages->dailyRoi;
            $roiMaxDay =  $packages->days;
            $roiAmt = ($amount * $roiPer) / 100;
            $checkRoi = Transaction::where("trans", 1)->where("from_package", $id)->where("user_id", $user_id)->whereDate('created_at', Carbon::today())->count();

            if ($checkRoi == 0 && $packageId == 1) {
                Transaction::create(["user_id" => $user_id, "packageId" => $packageId, "trans" => 1, "amount" => $roiAmt, "from_package" => $id, "type" => "ROI"]);
            } elseif ($checkRoi == 0 && $roiCount <= $roiMaxDay) {

                Transaction::create(["user_id" => $user_id, "packageId" => $packageId, "trans" => 1, "amount" => $roiAmt, "from_package" => $id, "type" => "ROI"]);
                Transaction::where("id", $id)->increment("roi_cnt", 1);
            }
        }
    }

    public function withupdate()
    {
        $settings      = Setting::where("id", 1)->first();
        $requestData   = Withdrawal::select("amount", "id", "trans_id", "user_id", "error_response", "curl_response", "checkCount")->where("status", "Pending")->skip(0)->take(10)->where("checkCount", "<", 6)->get();
        foreach ($requestData as $key => $trans) {
            $id          = $trans->id;
            $user_id     = $trans->user_id;
            $trans_id    = $trans->trans_id;
            $amount      = $trans->amount;
            $curl_response = $trans->curl_response;
            $error_response = $trans->error_response;
            $checkCount  = $trans->checkCount;

            $curl           = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_URL => $settings['DEPOSIT_API'] . "?tx_id=" . $trans_id,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'GET',
                CURLOPT_HTTPHEADER => array(
                    'Content-Type: application/json'
                ),
            ));
            $response       = curl_exec($curl);
            curl_close($curl);
            $responseDecode = json_decode($response, true);
            $curl_response  = $curl_response . "," . $response;


            $status       = "";
            $callAmt      = 0;
            $contractAddr = "";
            $fromAddr     = "";


            if (isset($responseDecode["data"]["status"]) && !empty($responseDecode["data"]["status"])) {
                $status       = $responseDecode["data"]["status"];
            }

            if (isset($responseDecode['data']['logs'][0]['data'])) {
                $callAmt      = hexdec($responseDecode['data']['logs'][0]['data']);
                $callAmt      = $callAmt / 10 ** 18;
            }
            if (isset($responseDecode['data']['from'])) {
                $fromAddr     = $responseDecode['data']['from'];
            }
            if (isset($responseDecode['data']['to'])) {
                $contractAddr = $responseDecode['data']['to'];
            }
            //echo "status::".$status." contractAddr::".$contractAddr." fromAddr::".$fromAddr." callAmt::".$callAmt ;die;

            //Request Update
            if (empty($responseDecode)) {
                $error_response  = $error_response . ", Empty Response";
                Withdrawal::where("id", $id)->update(["status" => "Pending", "checkCount" => ($checkCount + 1), "curl_response" => $curl_response, "error_response" => $error_response]);
            } else if (isset($responseDecode["Error"]) && !empty($responseDecode["Error"])) {
                $error_response  = $error_response . ", Error in response";
                Withdrawal::where("id", $id)->update(["status" => "Pending", "checkCount" => ($checkCount + 1), "curl_response" => $curl_response, "error_response" => $error_response]);
            } else if ($status != "SUCCESS") {
                $error_response  = $error_response . ", failed response";
                Withdrawal::where("id", $id)->update(["status" => "Pending", "checkCount" => ($checkCount + 1), "curl_response" => $curl_response, "error_response" => $error_response]);
            } else if ($contractAddr != $settings['CONTRACT_ADDRESS']) {
                $error_response  = $error_response . ", Contract match error";
                Withdrawal::where("id", $id)->update(["status" => "Pending", "checkCount" => ($checkCount + 1), "curl_response" => $curl_response, "error_response" => $error_response]);
            } /*
        else if(  $callAmt!=$tokenAmt){
          $error_response  = $error_response.", Amount matche error";
          Withdrawal::where("id",$id)->update( ["status"=>"Pending","checkCount"=>($checkCount+1), "curl_response"=>$curl_response,"error_response"=>$error_response] );
        }*/ else {
                Withdrawal::where("id", $id)->update(["status" => "Success", "checkCount" => ($checkCount + 1), "curl_response" => $curl_response, "error_response" => $error_response]);
            }
        }
        Withdrawal::where("status", "Pending",)->where("checkCount", 6)->update(["amount" => 0, "status" => "Failed"]);
    }

    public function matchingReward()
    {
        $userFounds = User::select("id", "levelParent", "level_str")->where("packageAmt", ">", 0)->where("id", '>', 1)->where('id', 284)->get();

        if (count($userFounds) > 0) {
            foreach ($userFounds as $key => $mainUser) {
                $user_id     = $mainUser['id'];
                $treeUser    = User::select("id", "levelParent", "level_str")->where("packageAmt", ">", 0)->where("levelParent", $user_id)->get();
                $matching       = 0;
                $highestMatchingIncome = 0;
                $lastMatchingAmount = 0;
                $totalMatchingIncome = 0;
                $highestMatchingIncome = 0;
                $secondHighestMatchingIncome = 0;
                
                foreach ($treeUser as $key => $user) {
                    $legBusiness  = Transaction::select("amount")->whereIn('user_id', function ($query) use ($user) {
                        $query->select('id')
                            ->from('users')
                            ->where("level_str", "like", $user['level_str'] . "%");
                    })->where("trans", 0)->sum('amount');

                    if ($legBusiness > $highestMatchingIncome) {
                        $secondHighestMatchingIncome = $highestMatchingIncome;
                        $highestMatchingIncome = $legBusiness;
                    } else if ($legBusiness > $secondHighestMatchingIncome && $legBusiness < $highestMatchingIncome) {
                        $secondHighestMatchingIncome = $legBusiness;
                    }
                    $totalMatchingIncome += $legBusiness; //All lag income
                }

                // echo $highestMatchingIncome. '------'.$secondHighestMatchingIncome. '<br>'; die;
                $lastMatchingData = MatchingIncome::where('user_id', $user_id)->orderBy('id', 'desc')->first();

                if (!empty($lastMatchingData)) {
                    $lastMatchingAmount = $lastMatchingData->matching_amount;
                }
                $otherLegMatchingIncome = $totalMatchingIncome - $highestMatchingIncome - $secondHighestMatchingIncome;
                // dd($otherLegMatchingIncome);
                $high_leg_business = $highestMatchingIncome;

                $lowAmount = $otherLegMatchingIncome > $highestMatchingIncome ? $highestMatchingIncome : $otherLegMatchingIncome;

                $currentMatchingIncome =  $lowAmount - $lastMatchingAmount;
                if ($currentMatchingIncome > 0) {

                    if ($totalMatchingIncome >= 130) {
                        // dd($totalMatchingIncome);
                        $halfTeamBusiness = $totalMatchingIncome / 2;
                        $high_leg_business = $halfTeamBusiness;
                        // dd($high_leg_business);
                        $sec_high_leg_business = $high_leg_business / 2;
                        $other_leg_business = $sec_high_leg_business / 2;
                        if (($high_leg_business >= 60) && ($sec_high_leg_business >= 30) && ($other_leg_business >= 20))
                        {
                            $matching = 500;
                            // dd($matching);
                        }
                    }

                    if ($totalMatchingIncome >= 11000) { //11000
                        dd("testing1");

                        $halfTeamBusiness = 11000 / 2;
                        $high_leg_business = $halfTeamBusiness;
                        $sec_high_leg_business = $high_leg_business / 2;
                        $other_leg_business = $sec_high_leg_business / 2;
                        if (($high_leg_business >= 5500) && ($sec_high_leg_business >= 2750) && ($other_leg_business >= 2750)) {
                            $matching = 1000;
                        }
                    }

                    $matchRow = Rank::where('amount', $matching)->first();
                    dd($matchRow);
                    // $totalInvestment300 =  User::totalIncomePercentage($user_id);
                    // $totalIncome =  User::totalIncome($user_id);

                    if (isset($matchRow)) {
                        $rank = $matchRow->id;

                        $alreadyIncome =  Transaction::where('user_id', $user_id)->where('rank', $rank)->count();

                        if ($matching > 0 && $alreadyIncome == 0) {

                            // if ($totalIncome <= $totalInvestment300) {

                                Transaction::create(["rank" => $rank, "trans" => 5, "type" => "Bonus Rewards", "user_id" => $user_id, "amount" => $matching]);

                                if ($currentMatchingIncome > 0) {
                                    $income = MatchingIncome::create(["user_id" => $user_id, "amount" => $currentMatchingIncome, "highest_leg_business" => $high_leg_business, "other_leg_business" => $otherLegMatchingIncome, "rank" => $rank]);
                                }
                            // }
                        }
                    }
                }
            }
        }
    }
}
