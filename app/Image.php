<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
<<<<<<< HEAD
    Protected $table = 'images';
    public $timestamps = false;
<<<<<<< HEAD
=======

    public function product()
    {
        return $this->belongsTo('App/Product');
    }
>>>>>>> fe8a036de96a64f37ce0839e7a1770cbb61c94d5
=======

    protected $table = 'images';

    public function products()
    {

        return $this->hasMany('App\Product');
    }
>>>>>>> 3cedb2bb1e6a07c66a2138e66c4a2cdc3be57b59
}
