<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $user = User::first();
        $product = Product::first();

        Order::create([
            'user_id' => $user->_id,
            'items' => [],
            'total_price' => $product->price * 2,
            'status' => 'paid',
            'payment_method' => 'credit_card',
            'shipping_address' => $user->address
        ]);
    }
}
