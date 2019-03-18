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
    public function order()
    {
        return $this->belongsToMany('App/Product', 'order_product', 'id', 'id')
            ->withPivot('qty');
    }
    public function image()
    {
        return $this->hasMany('App/Image');
    }
}
