<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Support\Facades\Auth;
use MongoDB\Laravel\Eloquent\Model;
use MongoDB\Laravel\Relations\BelongsTo;
use MongoDB\Laravel\Relations\HasMany;

class Product extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'products';

    protected $fillable = [
        'name',
        'description',
        'price',
        'stock',
        'category_id',
        'images',
        'like_count',
        'comments',
    ];

    protected $casts = [
        'images' => 'array',
        'comments' => 'array',
    ];

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
