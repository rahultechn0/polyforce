<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Price;
use App\Models\Package;
use App\Models\Setting;
use App\Models\Transaction;
use App\Models\Metarequest;
use App\Models\Withdrawal;
use App\Models\Packages;
use App\Models\Matchingincome;
use App\Models\Rank;
use Response;
use Auth;
use FFI;
use GuzzleHttp\Promise\Create;
use PhpParser\Builder\Trait_;
use Session;
use Illuminate\Support\Carbon;

class DashboardController extends Controller
{

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
    public function checkUser(Request $request)
    {
        $data      = $request->all();
        $findCheck = User::where("wallet_address", $data['wallet_address'])->count();
        if ($findCheck == 1) {
            $userData       = Auth::user();
            if ($userData->wallet_address != $data['wallet_address']) {
                Auth::logout();
                $request->session()->invalidate();
                $request->session()->regenerateToken();
                return Response::json(array('type' => "error", 'msg'   => "user error 2"));
            } else {
                return Response::json(array('type' => "success", 'msg'   => "user error 3"));
            }
        } else {
            return Response::json(array('type' => "error", 'msg'   => "user error 1"));
        }
    }
    public function users()
    {
        if ((Auth::user()) && (Session::getId() == Auth::user()->session_id)) {
            $user_id         = Auth::user()->id;
            $userData        = User::where("id", $user_id)->first();
            $farmingWithda   = Withdrawal::whereIN("status", ["Pending", "Success"])->where("trans", 1)->where("user_id", $user_id)->sum("amount");
            $farmingIncome   = 0;
            $userInvest      = 0;
            $investData      = Transaction::where("user_id", $user_id)->where("trans", 0)->get();
            $matchingIncome      = Transaction::where("user_id", $user_id)->where("trans", 5)->get();

            $levelParent = user::select('levelParent')->where("id", $user_id)->get();
            $registerId = user::select('registerId')->where("levelParent", $levelParent)->get();

            foreach ($investData as $key => $inv) {
                $userInvest   += $inv['amount'];
                $today         = date("Y-m-d");
                $to            = \Carbon\Carbon::createFromFormat('Y-m-d', $inv['planExpiryDate']);
                $from          = \Carbon\Carbon::createFromFormat('Y-m-d', date("Y-m-d", strtotime($inv['created_at'])));
                $diff_in_month = $to->diffInMonths($from);
                ///echo $diff_in_month."</br>";
                $multiplier    = 1;
                if ($diff_in_month == 12) {
                    $multiplier  = 1.5;
                } else if ($diff_in_month == 18) {
                    $multiplier  = 2;
                } else if ($diff_in_month == 24) {
                    $multiplier  = 3;
                }
                if ($today >= $inv['planExpiryDate']) {
                    $farmingIncome += $inv['amount'] * $multiplier;
                    $investData[$key]['packageComplete'] = 1;
                } else {
                    $investData[$key]['packageComplete'] = 0;
                }
            }
            $latestPackage = Transaction::where("user_id", $user_id)->where('trans', 0)->where('type','Package invest')->where("status",1)->get();
            // dd($latestPackage);
            $tokenPrice = Price::first();
            foreach ($latestPackage as $key => $pack) {
                $totalRoi = Transaction::where('from_package', $pack->id)->where('trans', 1)->sum('amount');
                $latestPackage[$key]['total_roi'] = $totalRoi;
            }
            // $currencyList  = Currency::get();
            $level_str   = $userData['level_str'];
            //team size
            $teamSize = User::select("id")->where("id", ">", $user_id)->where("level_str", "LIKE", $level_str . "%")->get();

            $levelIncomes = Transaction::where('user_id', $user_id)->where('trans', 2)->get();

            $farmingIncome   = $farmingIncome - $farmingWithda;
            //stacking dividend
            $userRoi         = Transaction::where("user_id", $user_id)->where("trans", 1)->sum("amount");
            //level income
            $userLevel       = Transaction::where("user_id", $user_id)->where("trans", 2)->sum("amount");

            $userBonous    = Transaction::where("user_id", $user_id)->where("trans", 5)->sum("amount");

            //unstack income
            $unStackAmt       = Transaction::where("user_id", $user_id)->where("trans", 4)->sum("amount");
            // $matchingIncome  = Matchingincome::where("user_id", $user_id)->sum("amount");
            $totalWithdrawal = Withdrawal::whereIN("status", ["Pending", "Success"])->where("trans", 0)->where("user_id", $user_id)->sum("amount");
            $totalIncome     = $userRoi + $userLevel + $userBonous +$unStackAmt;

            $grnadTotal      = $totalIncome - $totalWithdrawal;
            $settings        = Setting::where("id", 1)->first();
            $priceData       = Price::where("id", 1)->first();
            $packages        = Package::where("status", 1)->get();
            // dd($packages);
            $levelTrans      = Transaction::select('type')->where("user_id", $user_id)->where("trans", 2)->groupBy('type')->selectRaw('sum(amount) as amount, type')->get();

            //Level user count
            $level_str   = $userData->level_str;
            $levelArr    = [];
            $addStrin    = "+[0-9]+,";
            $addStrin1   = "";
            for ($i = 1; $i < 11; $i++) {
                $addStrin1  .= $addStrin;
                $levelCnt    = User::whereRaw(" level_str REGEXP '^" . $level_str . $addStrin1 . "$'")->count();
                array_push($levelArr, $levelCnt);
            }
            return view('users', compact('levelArr', 'levelTrans', 'settings', 'packages', 'farmingIncome', 'priceData', 'userData', 'userLevel', 'userInvest', 'userRoi', 'totalIncome', 'grnadTotal', 'totalWithdrawal', 'matchingIncome', 'investData', 'latestPackage', 'levelIncomes', 'teamSize', 'tokenPrice', 'userBonous','unStackAmt'));
        } else {
            return redirect('/');
        }
    }

    public function checkPackageRequest(Request $request)
    {
        $user_id = Auth::user()->id;
        $data           = $request->all();
        $wallet_address = $data['wallet_address'];
        $pId            = $data['pId'];
        $amount         = $data['amount'];
        $priceData      = Price::where("id", 1)->first();
        $minAmt         = 10;
        $package     = Package::select('maxDeposit')->where('id',$pId)->first();
        $maxIncome = User::totalIncome($user_id);
       
        if ($package->maxDeposit > $maxIncome) {
            $checkPackage = Transaction::where('user_id', $user_id)->where('trans', 0)->count();
            if ($checkPackage == 1) {
                return Response::json(array('type' => "error", 'msg'   => "You have already active package"));
            }
        }
        // totalIncome($userId)
        if ($amount < $minAmt) {
            return Response::json(array('type' => "error", 'msg'   => "Minimum amount error"));
        }
        $checkUser = User::select("id")->where("status", 1)->where("wallet_address", $wallet_address)->first();

        if ($checkUser) {
            $user_id      = $checkUser->id;
            $checkDays    = Metarequest::select('id')->where('trans_type', "Package invest")->where("user_id", $user_id)->where("status", "Pending")->first();
            if ($checkDays) {
                return Response::json(array('type' => "error", 'msg'   => "Please wait your investment in progress."));
            } else {
                $oldPackage  = Transaction::select("id", "amount")->where("trans", 0)->where("user_id", $user_id)->orderBy("id", "ASC")->first();
                if ($oldPackage) {
                    if($oldPackage['amount']>$amount){
                        return Response::json(array('type' => "error", 'msg'   => "Amount will be greater than"+$oldPackage['amount'] ));
                    }
                }
                $tokenAmt = $amount / $priceData['tokenValue'];
                // $tokenAmt = $tokenAmt*(10**8);
                // return Response::json(array('type' => "success", 'msg'   => "go", "tokenAmt" => (int)$tokenAmt, "amount" => $amount,"pId"=>$pId));

                return Response::json(array('type' => "success", 'msg'   => "go", "tokenAmt" => (int)$tokenAmt, "amount" => $amount,"pId"=>$pId));
            }
        } else {
            return Response::json(array('type' => "error", 'msg'   => "Check package error 3"));
        }
    }
    public function addPackageRequest(Request $request)
    {
        $data           = $request->all();
        $trans_id       = $data['trans_id'];
        $amount         = $data['amount'];
        $wallet_address = $data['wallet_address'];
        $tokenAmt       = $data['tokenAmt'];
        $packageId      = $data['pId'];
        $checkUser      = User::select("id")->where("status", 1)->where("wallet_address", $wallet_address)->first();
        if ($checkUser) {
            $user_id      = $checkUser['id'];
            $transCheck    = Transaction::select("id")->where("trans_id", $trans_id)->count();

            if ($transCheck == 0) {
                $MetaArr     = array('trans_type' => "Package invest", 'wallet_address' => $wallet_address, 'user_id' => $user_id, 'tokenAmt' => $tokenAmt, 'amount' => $amount, 'trans_id' => $trans_id, "status" => "Pending","packageId"=>$packageId);
                Metarequest::create($MetaArr);
                return Response::json(array('type' => "success", 'msg'   => "Success"));
            } else {
                return Response::json(array('type' => "error", 'msg'   => "Package error 1"));
            }
        } else {
            return Response::json(array('type' => "error", 'msg'   => "Package error 3"));
        }
    }

    public function package()
    {
        if( (Auth::user()) && (Session::getId()==Auth::user()->session_id)  ){
            $packages = Package::get();
            // dd($packages);
            $priceData       = Price::where("id",1)->first();
            return view('package', compact('packages','priceData'));
        }else{
        return redirect('index');
      }
    }

    public function unstack(Request $request)
    {
        $data      = $request->all();
        $transId   = $data['transId'];
        $trans = Transaction::where('id',$transId)->where('trans',0)->first();
        $packageId = $trans->packageId;
        $user_id = $trans->user_id;

        if ($packageId==1) {

            $amount = $trans['amount'];
            $ustAmt = $amount;

        }else{

            $amount = $trans['amount'];
            $ustAmt = ($amount * 25)/100;
            $ustAmt = $amount - $ustAmt;
        }
        $newTransArr     = array("user_id" => $user_id, "amount" => $ustAmt, "trans" => 4, "type" => "unstack");
        Transaction::create($newTransArr);
        Transaction::select('trans')->where('user_id', $user_id)->where('id',$transId)->where("trans", 0)->update(["status"=>0,"type"=>"Package Unstack"]);

        // User::select('packageAmt')->where('id', $user_id)->update(['packageAmt' => 0]);
        return Response::json(array('type' => "success", 'msg'   => "Success"));
    }

    public function withRe(Request $request)
    {
        $today         = date("Y-m-d");
        $data          = $request->all();
        $amt           = $data['amt'];
        $wallet        = $data['wallet_address'];
        $trans         = $data['trans'];
        $userData      = Auth::user();
        $user_id       = Auth::user()->id;
        $settings      = Setting::where("id", 1)->first();

        if ((Auth::user()) && (Session::getId() == Auth::user()->session_id)) {
            $withRequest     = Withdrawal::where("user_id", $user_id)->where("status", "Pending")->count();
            if ($withRequest > 0) {
                return Response::json(array('type' => "error", 'msg'   => "Withdrwal error 3"));
            }
            $totalIncome     = User::WithdrawaableIncome($user_id);
            $doneWithamt     = Withdrawal::whereIN("status", ["Pending", "Success"])->where("user_id", $user_id)->where("trans", 0)->sum("amount");

            $withAmtDB       = (int)($totalIncome - $doneWithamt);
            if($withAmtDB < $amt){
                return Response::json(array('type' => "error", 'msg'   => "Insufficient Balance"));
            }

            if ($wallet != $userData->wallet_address) {
                return Response::json(array('type' => "error", 'msg'   => "Withdrwal error 1"));
            }
           if ($withAmtDB < 1) {
                return Response::json(array('type' => "error", 'msg'   => "Withdrwal error 2"));
            }
            $priceData    = Price::where("id", 1)->first();
            $withAmt      = (int)$amt;

            $cutAmt       = ($withAmt*6)/100;
            $tokenAmt     = $withAmt-$cutAmt;
            $tokenPrice =  $priceData['tokenValue'];
            $token = $tokenAmt/$tokenPrice;
            // $token = $token*(10**8);
            $token = (int)$token;
            $postFields   = array("wallet_address" => $wallet, "amount" => $token, "tokenAddress" => $settings['TOKEN_ADDRESS']);
            $passValue    = json_encode($postFields);
            $curl         = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_URL => $settings['WITHDRAWAL_API'],
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => $passValue,
                CURLOPT_HTTPHEADER => array(
                    'Content-Type: application/json'
                ),
            ));
            $response  = curl_exec($curl);
            $curl_response = $response;
            $response  = json_decode($response);
            // dd($response);
            // print_r($withAmt);die;
            if ($response->success == true) {
                Withdrawal::create(["trans" => $trans, "user_id" => $user_id, "amount" => $tokenAmt, "trans_id" => $response->data, "status" => "Pending"]);
                return Response::json(array('type' => "success", 'msg'   => "withdrawal successfully."));
            }
            else {
                return Response::json(array('type' => "error", 'msg'   => "Withdrwal amount not set."));
            }
        } else {
            return Response::json(array('type' => "error", 'msg'   => "Please login first.."));
        }
    }

    public function withupdate()
    {
        $requestData     = Withdrawal::select("amount", "id", "trans_id", "user_id", "curl_response", "checkCount")->where("status", "Pending")->where("checkCount", "<", 6)->get();
        foreach ($requestData as $key => $trans) {
            $id          = $trans->id;
            $user_id     = $trans->user_id;
            $trans_id    = $trans->trans_id;
            $amount      = $trans->amount;
            $curl_response = $trans->curl_response;
            $checkCount  = $trans->checkCount;

            $curl  = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_URL => env('TRON_API_URL'),
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => '{"value": "' . $trans_id . '"}',
                CURLOPT_HTTPHEADER => array(
                    'Content-Type: application/json'
                ),
            ));
            $response       = curl_exec($curl);
            curl_close($curl);
            $responseDecode = json_decode($response, true);
            $curl_response  = $curl_response . "," . $response;

            $status       = "";
            if (isset($responseDecode["ret"][0]["contractRet"]) && !empty($responseDecode["ret"][0]["contractRet"])) {
                $status       = $responseDecode["ret"][0]["contractRet"];
            }
            //Request Update
            if (empty($responseDecode)) {
                Withdrawal::where("id", $id)->update(["status" => "Pending", "checkCount" => ($checkCount + 1), "curl_response" => $curl_response]);
            } else if (isset($responseDecode["Error"]) && !empty($responseDecode["Error"])) {
                Withdrawal::where("id", $id)->update(["status" => "Pending", "checkCount" => ($checkCount + 1), "curl_response" => $curl_response]);
            } else if ($status != "SUCCESS") {
                Withdrawal::where("id", $id)->update(["status" => "Pending", "checkCount" => ($checkCount + 1), "curl_response" => $curl_response]);
            } else {
                Withdrawal::where("id", $id)->update(["status" => "Success", "checkCount" => ($checkCount + 1), "curl_response" => $curl_response]);
            }
        }
        Withdrawal::where("status", "Pending",)->where("checkCount", 6)->update(["amount" => 0, "status" => "Failed"]);
    }

}
