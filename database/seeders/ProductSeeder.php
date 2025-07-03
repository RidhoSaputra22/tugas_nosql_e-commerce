<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Product::create([
            'name' => 'Adidas Hoodie',
            'description' => 'Warm and cozy hoodie',
            'price' => 80,
            'stock' => 15,
            'category' => 'Clothing',
            'tags' => ['adidas', 'hoodie'],
            'images' => ['hoodie.jpg'],
            'ratings' => ['average' => 4.0, 'count' => 3],
            'like_count' => 0
        ]);
    }
}
