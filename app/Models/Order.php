<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Support\Facades\Auth;
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
        'product',
        'total_price',
        'status',
        'payment_method',
        'shipping_address'
    ];

    protected $casts = [
        'items' => 'array',
        'shipping_address' => 'array',
        // 'product' => 'array'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function getTotalPrice(): float
    {
        $total = 0;
        foreach ($this->items as $item) {
            $price = $item['product']['price'] * $item['quantity'];
            $total += $price;
        }
        // dd($total);
        $this->update([
            'total_price' => $total
        ]);

        return $this->total_price;
    }

    public static function createOrder(Product $product, int $qty): Order
    {
        $order = Order::firstOrCreate(
            [
                'user_id' => Auth::id(),
                'status' => 'pending'
            ],
            [
                'payment_method' => 'cash',
                'items' => [],
                'total_price' => 0,
            ]
        );

        $items = $order->items ?? [];

        $items[] = [
            'product' => $product->toArray(),
            'quantity' => $qty
        ];

        $order->items = $items;
        $order->total_price = collect($items)->reduce(function ($carry, $item) {
            return $carry + ($item['product']['price'] * $item['quantity']);
        }, 0);

        $order->save();

        return $order;
    }
}
