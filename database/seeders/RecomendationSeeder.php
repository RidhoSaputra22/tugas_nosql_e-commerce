<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Recomendation;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RecomendationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $user = User::first();
        $products = Product::pluck('_id')->take(2);

        Recomendation::create([
            'user_id' => $user->_id,
            'products' => $products->toArray(),
            'generated_at' => now()
        ]);
    }
}
