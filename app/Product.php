<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    Protected $table = 'products';
    public $timestamps = false;

    public function category()
    {
        return $this->belongsTo('App/Category');
    }
}
