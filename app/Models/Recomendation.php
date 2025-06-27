<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

class Recomendation extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'recomendations';

    protected $fillable = [
        'user_id',
        'products',
        'generated_at'
    ];

    protected $casts = [
        'products' => 'array',
    ];
}
