<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table='articles';
    // On peut choisir de ne pas suivre les convention exemple désactiver les timestamp, ne pas avoir d'id .... avec  protected
}
