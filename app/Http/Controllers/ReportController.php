<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Setting;
use App\Models\Transaction;
use App\Models\Withdrawal;
use App\Models\Rank;
use App\Models\Matchingincome;
use Illuminate\Support\Facades\DB;
use Response;
use Auth;
use Carbon\Carbon;
use PhpParser\Builder\Trait_;
use Session;
// use Illuminate\Support\Carbon;
class ReportController extends Controller
{

    public function roiReport() {
        if( (Auth::user()) && (Session::getId()==Auth::user()->session_id)  ){
        $user_id         = Auth::user()->id;
        $userData        = User::where("id",$user_id)->first();
        $transactions    = Transaction::where("user_id",$user_id)->where("trans",1)->orderBy("id","DESC")->get();
        $settings        = Setting::where("id",1)->first();
        return view('roiReport',compact('userData','transactions',"settings" ) );
        }else{
        return redirect('/');
        }
    }

    public function packageReport() {
        if( (Auth::user()) && (Session::getId()==Auth::user()->session_id)  ){
        $user_id         = Auth::user()->id;
        $userData        = User::where("id",$user_id)->first();
        $package         = Transaction::where("user_id", $user_id)->where('amount','>',0)->where('trans', 0)->get();
        return view('packageReport',compact('userData','package'));
        }else{
        return redirect('/');
        }
    }

    public function leadership() {
        if( (Auth::user()) && (Session::getId()==Auth::user()->session_id)  ){
        $user_id         = Auth::user()->id;
        $userData        = User::where("id",$user_id)->first();
        $package = Transaction::where("user_id", $user_id)->where('trans', 5)->get();

        return view('leadership',compact('userData','package') );
        }else{
        return redirect('/');
        }
    }
    
    public function levelReport() {
        if( (Auth::user()) && (Session::getId()==Auth::user()->session_id)  ){
        $user_id         = Auth::user()->id;
        $userData        = User::where("id",$user_id)->first();
        $transactions    = Transaction::where("user_id",$user_id)->where("trans",2)->orderBy("id","DESC")->get();
        $settings        = Setting::where("id",1)->first();
        return view('levelReport',compact('userData','transactions',"settings" ) );
        }else{
        return redirect('/');
        }
    }

    public function withdrawalReport() {
        if( (Auth::user()) && (Session::getId()==Auth::user()->session_id)  ){
        $user_id         = Auth::user()->id;
        $userData        = User::where("id",$user_id)->first();
        $transactions    = Withdrawal::where("user_id",$user_id)->orderBy("id","DESC")->get();
        $settings        = Setting::where("id",1)->first();
        return view('withdrawalReport',compact('userData','transactions',"settings" ) );
        }else{
        return redirect('/');
        }
    }

    function network(){
        if( (Auth::user()) && (Session::getId()==Auth::user()->session_id)  ){
        $userData     = Auth::user();
        $user_id      = $userData['id'];
        $level_str   = $userData['level_str'];

        $levelArr    = [];
        $userArr    = [];
        $addStrin    = "+[0-9]+,";
        $addStrin1   = "";
        $teamSize     = User::select("id")->where("id",">",$user_id)->where("level_str","LIKE", $level_str."%")->get();

        for($i=1;$i <= count($teamSize); $i++){
            $addStrin1  .= $addStrin;
            $levelCnt    = User::select("id")->whereRaw(" level_str REGEXP '^".$level_str.$addStrin1."$'")->count();
            $username    = User::select("registerId")->whereRaw(" level_str REGEXP '^" . $level_str . $addStrin1 . "$'")->pluck('registerId');
            array_push($userArr, $username);
            array_push( $levelArr,$levelCnt);
        }
        // $teamSize     = User::select("id")->where("id",">",$user_id)->where("level_str","LIKE", $level_str."%")->get();
        $teamBusiness = Transaction::select("amount")->whereIn("user_id",$teamSize)->where('amount','>',0)->where("trans",0)->sum("amount");
        $totalUser    = [];///User::select("id","registerId","parent_id","created_at","parent_str","fname","lname")->where("id","!=",$user_id)->where("parent_str","LIKE",$userData['parent_str']."%")->get();
        return view('network', compact('userData',"teamSize","teamBusiness","levelArr","totalUser","userArr"));
        }else{
        return redirect('/');
        }
    }

    function getTeamInfo( Request $request){
        $userData     = Auth::user();
        $user_id      = $userData['id'];
        $level_str   = $userData['level_str'];
        $formData     = $request->all();
        $levelNo      = $formData['levelNo']+1;
        $addStrin    = "+[0-9]+,";
        $addStrin1   = "";
        for($i=1;$i<$levelNo; $i++){
            $addStrin1  .= $addStrin;
        }
        $users       = User::whereRaw(" level_str REGEXP '^".$level_str.$addStrin1."$'")->get();
        $returnHTML  = view('team-details')->with('users', $users)->render();

        return response()->json(array('type' => "success", 'table'=>$returnHTML));

    }

    // function network(){
	// 	$userData     = Auth::user();
    //     $user_id      = $userData['id'];
    //     $level_str   = $userData['level_str'];

    //     $levelArr    = [];
    //     $userArr    = [];
    //     $addStrin    = "+[0-9]+,";
    //     $addStrin1   = "";

    //     $teamSize     = User::select("id")->where("id",">",$user_id)->where("level_str","LIKE", $level_str."%")->get();

    //     for($i=1;$i<=count($teamSize); $i++){
    //         $addStrin1  .= $addStrin;
    //         $levelCnt    = User::select("id")->whereRaw(" level_str REGEXP '^".$level_str.$addStrin1."$'")->count();
    //         $username    = User::select("registerId")->whereRaw(" level_str REGEXP '^".$level_str.$addStrin1."$'")->first();
    //         array_push( $levelArr,$levelCnt);
    //         array_push( $userArr,$username['registerId']);
    //     }

    //     $teamBusiness = Transaction::select("amount")->whereIn("user_id",$teamSize)->where("trans",0)->sum("amount");
    //     $totalUser    = [];///User::select("id","registerId","parent_id","created_at","parent_str","fname","lname")->where("id","!=",$user_id)->where("parent_str","LIKE",$userData['parent_str']."%")->get();
    //     return view('network', compact('userData',"teamSize","teamBusiness","levelArr","totalUser","userArr"));
    // }

}
