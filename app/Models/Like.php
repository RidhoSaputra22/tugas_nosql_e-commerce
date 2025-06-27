<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

class Like extends Model
{

    protected $connection = 'mongodb';
    protected $collection = 'likes';

    protected $fillable = [
        'user_id',
        'product_id'
    ];
}
