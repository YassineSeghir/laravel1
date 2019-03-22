<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';
    public $timestamps = false;

    public function address()
    {
        return $this->hasMany('App\Address', 'id_customer');
    }
    public function order()
    {
        return $this->hasMany('App\Order', 'id_customer');
    }
}
