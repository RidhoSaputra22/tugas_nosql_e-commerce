<?php

declare(strict_types=1);

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;
use MongoDB\Laravel\Relations\BelongsTo;
use MongoDB\Laravel\Relations\HasMany;

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

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function product(): HasMany
    {
        return $this->hasMany(Product::class, 'items', '_id');
    }

    public function updateTotalPrice(): void
    {
        $total = 0;
        foreach ($this->items as $item) {
            $price = $item['price'] * $item['quantity'];
            $total += $price;
        }
        // dd($total);
        $this->update([
            'total_price' => $total
        ]);
    }
}
