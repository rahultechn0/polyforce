<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $guarded = [''];
    /**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	*/

	public function user(){
         return $this->belongsTo(User::class);
    }
    public function referralUser(){
         return $this->belongsTo(User::class,"refrall_id","id");
    }
    public function userData(){
        return $this->belongsTo(User::class,"user_id","id");
    }
    public function metaRequestData(){
        return $this->belongsTo(Metarequest::class,"trans_id","trans_id");
    }
    public function transaction(){
         return $this->belongsTo(Transaction::class);
    }
    public static function withdrawalRules($id = 0) {
        $rules = [
            "withdrawal_amount" => "required|numeric",
        ];
        return $rules;
    }

    public function packageName()
    {
        return $this->hasOne(Package::class,"id","packageId");
    }

    public function rankName()
    {
        return $this->hasOne(Rank::class,"id","packageId");
    }

    public function ranks()
    {
        return $this->hasOne(Rank::class,"id","rank");
    }

    public static function messages ($id = 0){
        $messages = [
        "withdrawal_amount.required" => "Please enter withdrawal amount.",
        "withdrawal_amount.numeric"  => "Please enter numeric amount.",
        ];
        return $messages;
    }
    public function transAmt(){
         return $this->belongsTo(Self::class,"from_package","id");
    }
}
