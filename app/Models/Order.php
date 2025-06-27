<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

class Order extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'orders';

    protected $fillable = [
        'user_id',
        'items',
        'total_price',
        'status',
        'payment_method',
        'shipping_address'
    ];

    protected $casts = [
        'items' => 'array',
        'shipping_address' => 'array',
    ];
}
