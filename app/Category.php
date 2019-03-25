<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    Protected $table = 'categories';
    public $timestamps = false;

    public function products()
    {

    }
}
