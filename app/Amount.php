<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Amount extends Model
{
    // get utility code associated with amount

    public function utility_code(){
        return $this->belongsTo('App\UtilityCode');
    }

}
