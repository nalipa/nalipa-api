<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //get users associated with user

    public function users(){
        return $this->hasMany('App\User');
    }


}
