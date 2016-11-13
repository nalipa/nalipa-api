<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    // get user associated with transaction

    public function transaction(){
        return $this->belongsTo('App\Transaction','order_number','id');
    }
}
