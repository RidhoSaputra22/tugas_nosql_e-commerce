<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory;

    protected $connection = 'mongodb';
    protected $collection = 'products';

    protected $fillable = [
        'name',
        'description',
        'price',
        'stock',
        'category',
        'tags',
        'images',
        'ratings',
        'like_count'
    ];

    protected $casts = [
        'tags' => 'array',
        'images' => 'array',
        'ratings' => 'array',
    ];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
