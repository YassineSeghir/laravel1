<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Address
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Address newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Address newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Address query()
 * @mixin \Eloquent
 */
class Address extends Model
{
    Protected $table = 'adress';
    public $timestamps = false;
}
