<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserRoles extends Model
{
    //get users associated with user

    public function users(){
        return $this->belongsTo('App\User','id','user_id');
    }

    public function roles(){
        return $this->belongsTo('App\Role','id','role_id');
    }

}
