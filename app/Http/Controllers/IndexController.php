<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Price;
use App\Models\Setting;
use App\Models\Transaction;
use App\Models\Metarequest;
use App\Models\Withdrawal;
use App\Models\Olduser;
use Response;
use Auth;
use PhpParser\Builder\Trait_;
use Session;
class IndexController extends Controller
{
    public function index() {
      if(Auth::user()){
        Auth::logout();
      }
      $settings           = Setting::where("id",1)->first();
      $last_ten_records   = Withdrawal::where("status",["Success","Pending"])->orderBy("id","DESC")->skip(0)->take(10)->get();
      return view('frontend.index',compact('settings','last_ten_records'));
    }

    public function indexNew() {
      if(Auth::user()){
        Auth::logout();
      }
      $settings           = Setting::where("id",1)->first();
      $last_ten_records   = Withdrawal::where("status",["Success","Pending"])->orderBy("id","DESC")->skip(0)->take(10)->get();
      return view('frontend.register',compact('settings','last_ten_records'));
    }

    public function ido() {
      return view('ido');
    }
    public function idoAdmin() {
      return view('idoadmin');
    }

    function getBinaryPosition($position,$levelParent){
      ///echo $levelParent." position ".$position;die;
      $res    = User::where("binaryParent",$levelParent)->where("position",$position)->first();
      if($res){
          $id = $res['id'];
          return $this->getBinaryPosition($position,$id);
      }else{
          return $levelParent;
      }
    }

    function registerCheck(Request $request)
    {
        $formData   = $request->all();
        $wallet_address = $formData['wallet_address'];
        $registerId     = $formData['registerId'];

        $referralCheck  = User::select("id")->where("packageAmt",">",0)->where("registerId",$registerId)->count();

        $walletCheck   = User::select("id")->where("wallet_address",$wallet_address)->count();
        if($walletCheck==1){
            return Response::json(array('type' => "danger", 'msg' => "Wallet address already registered." ));
        }
        if($walletCheck==0){
            return Response::json(array('type' => "success", 'msg' => "Wallet address not registered." ));
        }
    }

    function registerFrm(Request $request){
        ///return Response::json(array('type' => "danger", 'msg' => "Our team working on this. Please try after some time." ));
        $formData   = $request->all();
        $wallet_address = $formData['wallet_address'];
        $registerId     = $formData['registerId'];
        $referralCheck  = User::select("id")->where("packageAmt",">",0)->where("registerId",$registerId)->count();
        if($referralCheck==0){
            return Response::json(array('type' => "danger", 'msg' => "Sponsor Id not activated." ));
        }
        $walletCheck    = User::select("id")->where("wallet_address",$wallet_address)->count();
        if($walletCheck==1){
            return Response::json(array('type' => "danger", 'msg' => "Wallet address already registered." ));
        }

        $referralData   = User::select("id","level_str","binary_str")->where("registerId",$registerId)->first();
        $levelParent    = $referralData->id;
        $level_str      = $referralData->level_str;
        //Genrate referral id
        $new_registerId     = rand(10000000,99999999);
        $new_referralCheck  = User::select("id")->where("registerId",$new_registerId)->count();
        if($new_referralCheck !=0){
            $new_registerId = rand(10000000,99999999);
        }
        ///$binaryParent     = $this->getBinaryPosition($position,$levelParent);

        $insert           = User::create( ["levelParent"=>$levelParent, "wallet_address"=>$wallet_address, "registerId"=>$new_registerId, "levelParent"=>$levelParent] );
        $userId           = $insert->id;
        ////Level str
        $new_level_str    = $level_str.$userId.",";
        ////Binary Str

        //$binaryData       = User::select("id","binary_str")->where("id",$binaryParent)->first();
        ///$new_binary_str   = $binaryData['binary_str'].$userId.",";


        User::where("id",$userId)->update( ["level_str" =>$new_level_str/*,"binaryParent"=>$binaryParent, "binary_str"=>$new_binary_str*/ ] );

        return Response::json(array('type' => "success", 'msg' => "Successfully registered." ));

    }

    public function updateTree($position=null,$registerId =null) {
        die;
        $users   = User::where("id",">",1)->skip(0)->take(500)->orderBy("id","ASC")->get();
        foreach( $users as $key=>$user ){
            $userId             = $user['id'];
            $levelParent        = $user['levelParent'];
            $position           = $user['position'];
            $binaryParent       = $user['binaryParent'];
            $binary_str         = $user['binary_str'];
            echo " <span style='color:red' >userId ::".$userId." position ".$position." before binary parent ".$binaryParent." binaryStr".$binary_str."</span>";

            $binaryParent     = $this->getBinaryPosition($position,$levelParent,$userId);


            $binaryData       = Olduser::select("id","binary_str")->where("id",$binaryParent)->first();
            $new_binary_str   = $binaryData['binary_str'].$userId.",";

            Olduser::create( ["id"=>$userId,
                              "wallet_address"=>$user['wallet_address'],
                              "registerId"=>$user['registerId'],
                              "levelParent"=>$user['levelParent'],
                              "level_str"=>$user['level_str'],
                              "packageId"=>$user['packageId'],
                              "packageAmt"=>$user['packageAmt'],
                              "status"=>$user['status'],
                              "created_at"=>$user['created_at'],
                              "position"=>$position,
                              "binaryParent"=>$binaryParent,
                              "binary_str"=>$new_binary_str
                            ] );

            echo " <span style='color:green' >after binary parent".$binaryParent." new_binary_str".$new_binary_str."</span>";
            echo "</br>";

        }
        echo "hell";

        die;
    }

    public function register($registerId =null) {
      if(Auth::user()){
        Auth::logout();
      }
      $settings           = Setting::where("id",1)->first();
      $last_ten_records   = Withdrawal::where("status",["Success","Pending"])->orderBy("id","DESC")->skip(0)->take(10)->get();
      return view('frontend.register',compact('registerId','settings','last_ten_records'));
    }

    public function info() {
      $totalInvest     = Transaction::where("trans",0)->where("type","Package invest")->sum("amount");
      $totalLevel      = Transaction::where("trans",1)->sum("amount");
      $priceData       = Price::select("trx",'usdt')->where("id",1)->first();
      $totalInvest     = $totalInvest+61000;
      $totalLevel      = $totalLevel+9201;
      return view('front.info',compact('priceData','totalInvest','totalLevel'));
    }

    public function login(Request $request ) {
        $data      = $request->all();
        $findCheck = User::where("wallet_address",$data['wallet_address'])->first();
        if($findCheck){
            if($findCheck->status !=1){
                return Response::json(array('type' => "error", 'msg'   => "User restricted" ));
            }
            Auth::loginUsingId($findCheck->id);
            $user    = Auth::user();
            $session_id = Session::getId();
            User::where("id",$user->id)->update( ["session_id"=>$session_id] );
            if($user->status != '1'){
                Auth::logout();
                return Response::json(array('type' => "error", 'msg'   => "Your are restricted." ));
            }
            else
            {
                return Response::json(array('type' => "success", 'msg'   => "successfully login" ));
            }
        }else{
            $metaCheck    = Metarequest::select("id")->where("wallet_address",$data['wallet_address'])->where('status','Pending')->count();
            if($metaCheck==1){
                return Response::json(array('type' => "danger", 'msg' => "Registration in process." ));
            }
            else{
                return Response::json(array('type' => "error", 'msg'   => "Wallet address not registered." ));
            }
        }
    }


    // public function investCron()
    // {

    //     $settings      = Setting::where("id", 1)->first();
    //     $requestData   = Metarequest::select("amount", "pLimit", "tokenAmt", "id", "trans_id", "user_id", "curl_response", "checkCount", "error_response", "dailyRoi", "days", "tariffId")->where("trans_type", "Package invest")->where("status", "Pending")->where("checkCount", "<", 6)->get();

    //     foreach ($requestData as $key => $trans) {
    //         $id          = $trans->id;
    //         $pLimit      = $trans->pLimit;
    //         $user_id     = $trans->user_id;
    //         $trans_id    = $trans->trans_id;
    //         $tokenAmt    = $trans->tokenAmt;
    //         $amount      = $trans->amount;
    //         $curl_response = $trans->curl_response;
    //         $error_response = $trans->error_response;
    //         $checkCount  = $trans->checkCount;
    //         $roi_per     = $trans->dailyRoi;
    //         $roi_max     = ($trans->days);
    //         $packageId   = $trans->tariffId;
    //         $userData    = User::select("id", "wallet_address", "levelParent", "packageAmt")->where("status", 1)->where("id", $user_id)->first();

    //         if ($userData) {
    //             $transCount = Transaction::select("id")->where("trans_id", $trans_id)->count();
    //             if ($transCount == 0) {

    //                 $wallet_address = $userData->wallet_address;

    //                 $curl           = curl_init();
    //                 curl_setopt_array($curl, array(
    //                     CURLOPT_URL =>  $settings['DEPOSIT_API'] . "?tx_id=" . $trans_id,
    //                     CURLOPT_RETURNTRANSFER => true,
    //                     CURLOPT_ENCODING => '',
    //                     CURLOPT_MAXREDIRS => 10,
    //                     CURLOPT_TIMEOUT => 0,
    //                     CURLOPT_FOLLOWLOCATION => true,
    //                     CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    //                     CURLOPT_CUSTOMREQUEST => 'GET',
    //                     CURLOPT_HTTPHEADER => array(
    //                         'Content-Type: application/json'
    //                     ),
    //                 ));
    //                 $response       = curl_exec($curl);

    //                 curl_close($curl);
    //                 $responseDecode = json_decode($response, true);

    //                 $curl_response  = $curl_response . "," . $response;

    //                 $status       = "";
    //                 $callAmt      = 0;
    //                 $contractAddr = "";
    //                 $fromAddr     = "";

    //                 if (isset($responseDecode["data"]["status"]) && !empty($responseDecode["data"]["status"])) {
    //                     $status       = $responseDecode["data"]["status"];
    //                 }

    //                 if (isset($responseDecode['data']['logs'][0]['data'])) {
    //                     $callAmt      = hexdec($responseDecode['data']['logs'][0]['data']);
    //                     $callAmt      = $callAmt / 10 ** 18;
    //                 }
    //                 // echo "amount::".$amount." tokenAmt::".$tokenAmt." callAmt::".$callAmt;die;
    //                 if (isset($responseDecode['data']['from'])) {
    //                     $fromAddr     = $responseDecode['data']['from'];
    //                 }
    //                 if (isset($responseDecode['data']['to'])) {
    //                     $contractAddr = $responseDecode['data']['to'];
    //                 }

    //                 //Request Update
    //                 if (empty($responseDecode)) {
    //                     $error_response  = $error_response . ", Empty Response";
    //                     Metarequest::where("id", $id)->update(["status" => "Pending", "checkCount" => ($checkCount + 1), "curl_response" => $curl_response, "error_response" => $error_response]);
    //                 } else if (isset($responseDecode["Error"]) && !empty($responseDecode["Error"])) {
    //                     $error_response  = $error_response . ", Error in response";
    //                     Metarequest::where("id", $id)->update(["status" => "Pending", "checkCount" => ($checkCount + 1), "curl_response" => $curl_response, "error_response" => $error_response]);
    //                 } else if ($status != "SUCCESS") {
    //                     $error_response  = $error_response . ", failed response";
    //                     Metarequest::where("id", $id)->update(["status" => "Pending", "checkCount" => ($checkCount + 1), "curl_response" => $curl_response, "error_response" => $error_response]);
    //                 } else if ($contractAddr != $settings['CONTRACT_ADDRESS']) {
    //                     $error_response  = $error_response . ", Contract match error";
    //                     Metarequest::where("id", $id)->update(["status" => "Pending", "checkCount" => ($checkCount + 1), "curl_response" => $curl_response, "error_response" => $error_response]);
    //                 } else if ((string)$callAmt != (string)$tokenAmt) {
    //                     $error_response  = $error_response . ", Amount matche error";
    //                     Metarequest::where("id", $id)->update(["status" => "Pending", "checkCount" => ($checkCount + 1), "curl_response" => $curl_response, "error_response" => $error_response]);
    //                 } else {
    //                     $planExpiryDate  = date("Y-m-d", strtotime($pLimit));
    //                     ///Invest Entry
    //                     $newTransArr     = array("planExpiryDate" => $planExpiryDate, "packageId" => $packageId, "trans_id" => $trans_id, "user_id" => $user_id, "refrall_id" => 0, "amount" => $amount, "from_package" => 0, "roi_per" => $roi_per, "roi_max" => $roi_max, "roi_cnt" => 0, "trans" => 0, "type" => "Package invest");
    //                     $newEntry        = Transaction::create($newTransArr);
    //                     User::select('packageAmt')->where('id', $user_id)->update(['packageAmt' => $amount]);

    //                     $transId         = $newEntry->id;
    //                     ///Referral Entry

    //                     $parent_arr   = array();
    //                     $parent_per   = array(0.05, 0.01, 0.01);

    //                     $userParent = User::select("levelParent")->where("id", $user_id)->first();
    //                     if (!empty($userParent)) {
    //                         $referAMount     = $amount * 0.5;
    //                         Transaction::create(["user_id" => $userParent->levelParent, "refrall_id" => $user_id, "trans" => 3, "amount" => $referAMount, "from_package" => $id, "type" => "Referal Bonus"]);
    //                     }
    //                     ///User data update
    //                     // User::where("id",$user_id)->increment("packageAmt",$amount);
    //                     Metarequest::where("id", $id)->update(["status" => "Success", "checkCount" => ($checkCount + 1), "curl_response" => $curl_response]);
    //                 }
    //               // $planExpiryDate  = date("Y-m-d", strtotime($pLimit));
    //                 ///Invest Entry
    //                 //$newTransArr     = array("planExpiryDate" => $planExpiryDate, "packageId" => $packageId, "trans_id" => $trans_id, "user_id" => $user_id, "refrall_id" => 0, "amount" => $amount, "from_package" => 0, "roi_per" => $roi_per, "roi_max" => $roi_max, "roi_cnt" => 0, "trans" => 0, "type" => "Package invest");

    //               // $newEntry        = Transaction::create($newTransArr);
    //                 //User::select('packageAmt')->where('id', $user_id)->update(['packageAmt' => $amount]);

    //                 //$transId         = $newEntry->id;
    //                 ///Referral Entry

    //                 // $parent_arr   = array();
    //                 // $parent_per   = array(0.05, 0.01, 0.01);

    //               /* $userParent = User::select("levelParent")->where("id", $user_id)->first();
    //                 if (!empty($userParent)) {
    //                     $referAMount     = $amount * 0.05;
    //                     Transaction::create(["user_id" => $userParent->levelParent, "refrall_id" => $user_id, "trans" => 3, "amount" => $referAMount, "from_package" => $id, "type" => "Referal Bonus"]);
    //                 }*/
    //                 ///User data update
    //                 // User::where("id",$user_id)->increment("packageAmt",$amount);
    //                 //Metarequest::where("id", $id)->update(["status" => "Success", "checkCount" => ($checkCount + 1), "curl_response" => $curl_response]);
    //             } else {
    //                 $error_response  = $error_response . ", Duplicate transId";
    //                 Metarequest::where("id", $id)->update(["status" => "Pending", "checkCount" => ($checkCount + 1), "curl_response" => $curl_response, "error_response" => $error_response]);
    //             }
    //         } else {
    //             $error_response  = $error_response . ", User error";
    //             Metarequest::where("id", $id)->update(["status" => "Pending", "checkCount" => ($checkCount + 1), "curl_response" => $curl_response, "error_response" => $error_response]);
    //         }
    //     }
    //     Metarequest::where("trans_type", "Package invest")->where("status", "Pending")->where("checkCount", 6)->update(["status" => "Failed"]);
    // }
}
