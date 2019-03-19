<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'article';

    public function image()
    {
        return $this->belongsTo('App\Image');
    }


}


