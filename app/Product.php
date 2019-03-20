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
}


