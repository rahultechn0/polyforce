<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Rank extends Model
{
    use HasFactory;

    protected $guarded = [''];

    public function userRank(){
        return $this->belongsTo(User::class,"ranks","id");
    }

    public function Matching_child_rank($rank,$parent_left_str,$parent_right_str) {
        if ($rank==11) {
            return 0;
        }
        $left_child_check  =  User::where("level_str", "like", $parent_left_str . "%")->where('ranks',$rank)->count();
        $right_child_check =  User::where("level_str", "like", $parent_right_str . "%")->where('ranks',$rank)->count();
        if ($left_child_check>=1 && $right_child_check>=1) {
            return $rank;
        }else{
            $rank= $rank+1;
            return self::Matching_child_rank($rank,$parent_left_str,$parent_right_str);
        }
    }

    public function User_rank($rank,$user_id) {
        $ranksData = DB::table('ranks')
            ->leftJoin('users', 'users.ranks', '=', 'ranks.id')
            ->leftJoin('matchingincomes', 'matchingincomes.user_id', '=', 'users.id')
            ->leftJoin('transactions', 'transactions.user_id', '=', 'users.id')
            ->where('users.id',$user_id)
            ->where('users.ranks',$rank)
            ->first();

        return $ranksData;    
    }

}
