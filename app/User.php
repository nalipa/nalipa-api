<?php

namespace App;

use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];



    //get roles associated with user

    public function role(){
        return $this->belongsTo('App\Role','role_id','id');
    }


    //get answer associated with user

    public function answer(){
        return $this->hasOne('App\Answer','id','answer');
    }

    //get security question associated with user

    public function security_question(){
        return $this->hasOne('App\SecurityQuestion');
    }

    //get orders associated with user

    public function orders(){
        return $this->hasMany('App\Order');
    }

    // get transactions associated with user

    public function transactions(){
        return $this->hasMany('App\Transaction');
    }

    // get selcom transactions associated with user

    public function selcom_transactions(){
        return $this->hasMany('App\SelcomTransaction');
    }

    // get stripe transactions associated with user

    public function stripe_transactions(){
        return $this->hasMany('App\StripeTransaction');
    }

}
