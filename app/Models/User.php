<?php

namespace App\Models;

use MongoDB\Laravel\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $collection = 'users';
    protected $connection = 'mongodb';

    protected $fillable = [
        'name',
        'email',
        'password',
        'wishlist',
        'liked_products',
        'address',
        'image'
    ];

    protected $casts = [
        'wishlist' => 'array',
        'liked_products' => 'array',
    ];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
