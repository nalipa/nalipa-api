<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jedrzej\Sortable\SortableTrait;

class Transaction extends Model
{

    // enabling sortability of the model
    use SortableTrait;

    // declaring sortable fields
    public $sortable = ['created_at'];

    // get user associated with transaction

    public function user(){
        return $this->hasOne('App\User');
    }

    // get service provider associated with transaction

    public function service_provider(){
        return $this->belongsTo('App\ServiceProvider');
    }

    // get utility code associated with transaction

    public function utility_code(){
        return $this->belongsTo('App\UtilityCode');
    }



}
