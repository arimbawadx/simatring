<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    public function order()
    {
        return $this->hasMany('App\order');
    }
}
