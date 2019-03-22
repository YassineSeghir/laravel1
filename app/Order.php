<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    public $timestamps = false;

    public function product()
    {
        return $this->belongsToMany('App\Product', 'order_product', 'id_order', 'id_product')
            ->withPivot('qty');
    }
}
