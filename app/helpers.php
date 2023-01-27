<?php
use App\Models\User;
use App\Models\Matchingincome;


function getRankS2($id)
{
    $getS2Rank    = User::where("packageAmt",">",0)->where("levelParent",$id)->where('star2',1)->count();
    return $getS2Rank;
}

function getRankS3($id)
{

    $getS2Rank    = User::where("packageAmt",">",0)->where("levelParent",$id)->where('star3',1)->count();
    return $getS2Rank;
}
function getRankS4($id)
{

    $getS2Rank    = User::where("packageAmt",">",0)->where("levelParent",$id)->where('star4',1)->count();
    return $getS2Rank;
}

function getHighLegBusiness($id,$rank)
{
    $lastMatchingData = MatchingIncome::where('user_id',$id)->where('rank',$rank)->first();
    return $lastMatchingData;
}


