<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    Protected $table = 'images';
    public $timestamps = false;
<<<<<<< HEAD
=======

    public function product()
    {
        return $this->belongsTo('App/Product');
    }
>>>>>>> fe8a036de96a64f37ce0839e7a1770cbb61c94d5
}
