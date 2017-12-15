<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction_head extends Model
{
    public function transaction_detail(){
    		return $this->hasMany('App\Transaction_detail');
    }
}
