<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    public function produk()
    {
        return $this->belongsTo('App\produk');
    }

    public function user()
    {
        return $this->belongsTo('App\user');
    }
}
