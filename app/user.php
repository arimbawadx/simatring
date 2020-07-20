<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class user extends Model implements AuthenticatableContract
{
     use Authenticatable;
     
     public function order()
    {
        return $this->hasMany('App\order');
    }
}
