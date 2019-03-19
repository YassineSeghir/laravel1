<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    Protected $table = 'categories';
    public $timestamps = false;

    public function products()
    {
        return $this->hasMany('App/Product', 'id', 'id_category');
    }
}
