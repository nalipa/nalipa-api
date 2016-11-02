<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceProvider extends Model
{
    // get type associated with service provider
    public function type(){
        return $this->hasOne('App\ProviderType');
    }

    // get utility code associated with service provider
    public function utility_code(){
        return $this->belongsTo('App\UtilityCode');
    }

    // get transactions associated with service provider

    public function transactions(){
        return $this->hasMany('App\Transaction');
    }

    // get orders associated with service provider

    public function orders(){
        return $this->hasMany('App\Order');
    }
}
