<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'article';
    protected $primaryKey = 'ID_ARTICLE';
}