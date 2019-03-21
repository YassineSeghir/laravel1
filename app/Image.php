<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'images';
    public $timestamps = false;

    public function products()
    {
        return $this->hasMany('App\Product');
    }
}
