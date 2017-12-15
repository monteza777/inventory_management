<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction_detail extends Model
{
    public function transaction_head(){
    	return $this->belongsTo('App\Transaction_head');
    }
}
