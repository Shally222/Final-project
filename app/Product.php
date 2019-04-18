<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static where(string $string, $id)
 */
class Product extends Model
{
    protected $fillable = [
        'type','name','price','introduction',
    ];
}
