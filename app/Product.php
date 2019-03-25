<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    public $timestamps = false;

    public function image()
    {
        return $this->belongsTo('App\Image', 'id_image');
    }

    public function order()
    {
        return $this->belongsToMany('App\Order', 'order_product', 'id_order', 'id_product')
            ->withPivot('qty');
    }
    public function category()
    {
        return $this->belongsTo('App\Category', 'id_category');
    }

}


