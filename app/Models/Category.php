<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model;
use MongoDB\Laravel\Relations\HasMany;

class Category extends Model
{
    /** @use HasFactory<\Database\Factories\CategoryFactory> */
    use HasFactory;

    protected $connection = 'mongodb';
    protected $collection = 'categories';

    protected $fillable = [
        'name',
    ];

    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}
