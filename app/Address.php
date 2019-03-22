<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = 'address';
    public $timestamps = false;

    public function customer()
    {
        return $this->belongsTo('App\Customer', 'id_customer');
    }
}
