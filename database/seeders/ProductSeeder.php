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
        Product::insert([
            [
                'name' => 'Nike Air Max',
                'description' => 'Comfortable sports shoes',
                'price' => 120,
                'stock' => 10,
                'category' => 'Shoes',
                'tags' => ['nike', 'running'],
                'images' => ['image1.jpg'],
                'ratings' => ['average' => 4.5, 'count' => 5],
                'like_count' => 0
            ],
            [
                'name' => 'Adidas Hoodie',
                'description' => 'Warm and cozy hoodie',
                'price' => 80,
                'stock' => 15,
                'category' => 'Clothing',
                'tags' => ['adidas', 'hoodie'],
                'images' => ['hoodie.jpg'],
                'ratings' => ['average' => 4.0, 'count' => 3],
                'like_count' => 0
            ]
        ]);
    }
}
