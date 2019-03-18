<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    Protected $table = 'images';
    public $timestamps = false;

    public function product()
    {
        return $this->belongsTo('App/Product');
    }
}
