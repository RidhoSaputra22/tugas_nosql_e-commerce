<?php

namespace Database\Seeders;

use App\Models\Like;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LikeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $user = User::first();
        $product = Product::first();

        Like::create([
            'user_id' => $user->_id,
            'product_id' => $product->_id
        ]);
    }
}
