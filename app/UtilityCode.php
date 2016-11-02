<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UtilityCode extends Model
{
    // get service providers associated with utility code

    public function service_providers(){
        return $this->hasMany('App\ServiceProvider');
    }

    // get amounts associated with utility code

    public function amounts(){
        return $this->hasMany('App\Amount');
    }


}
