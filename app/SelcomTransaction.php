<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SelcomTransaction extends Model
{
    // get user associated with transaction

    public function user(){
        return $this->hasOne('App\User');
    }


}
