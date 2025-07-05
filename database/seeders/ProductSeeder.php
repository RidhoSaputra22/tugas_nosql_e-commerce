<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Comment;
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
        $products = [
            [
                "_id" => "7a1b2c3d4e5f6a7b8c9d0e1f",
                "name" => "Nike Air Force 1 '07",
                "description" => "Classic low-top basketball style shoe",
                "price" => 110,
                "stock" => 50,
                "category" => "Shoes",
                "tags" => ["nike", "sneakers", "lifestyle"],
                "images" => ["Adidas Ultrabost.webp"],
                "ratings" => ["average" => 4.9, "count" => 250],
                "like_count" => 580
            ],
            [
                "_id" => "7a1b2c3d4e5f6a7b8c9d0e2f",
                "name" => "Adidas Ultraboost 22",
                "description" => "High-performance running shoes",
                "price" => 180,
                "stock" => 35,
                "category" => "Shoes",
                "tags" => ["adidas", "running", "performance"],
                "images" => ["ASICS Gel-Kayano 29.webp"],
                "ratings" => ["average" => 4.8, "count" => 180],
                "like_count" => 450
            ],
            [
                "_id" => "7a1b2c3d4e5f6a7b8c9d0e3f",
                "name" => "Converse Chuck 70 Hi",
                "description" => "Vintage canvas high-top sneakers",
                "price" => 85,
                "stock" => 60,
                "category" => "Shoes",
                "tags" => ["converse", "sneakers", "classic"],
                "images" => ["Converse Chuck 70 Hi.webp"],
                "ratings" => ["average" => 4.7, "count" => 320],
                "like_count" => 620
            ],
            [
                "_id" => "7a1b2c3d4e5f6a7b8c9d0e4f",
                "name" => "Vans Old Skool",
                "description" => "Classic skate shoe with side stripe",
                "price" => 65,
                "stock" => 75,
                "category" => "Shoes",
                "tags" => ["vans", "skate", "sneakers"],
                "images" => ["Dr. Martens 1460 Boot.webp"],
                "ratings" => ["average" => 4.6, "count" => 400],
                "like_count" => 710
            ],
            [
                "_id" => "7a1b2c3d4e5f6a7b8c9d0e5f",
                "name" => "New Balance 550",
                "description" => "Retro basketball-inspired lifestyle shoe",
                "price" => 120,
                "stock" => 25,
                "category" => "Shoes",
                "tags" => ["newbalance", "retro", "lifestyle"],
                "images" => ["New Balance 550.webp"],
                "ratings" => ["average" => 4.8, "count" => 150],
                "like_count" => 850
            ],
            [
                "_id" => "7a1b2c3d4e5f6a7b8c9d0e6f",
                "name" => "Puma Suede Classic XXI",
                "description" => "Iconic suede low-top sneakers",
                "price" => 70,
                "stock" => 45,
                "category" => "Shoes",
                "tags" => ["puma", "suede", "classic"],
                "images" => ["Nike Air Force 1 07.jpg"],
                "ratings" => ["average" => 4.5, "count" => 190],
                "like_count" => 350
            ],
            [
                "_id" => "7a1b2c3d4e5f6a7b8c9d0e7f",
                "name" => "ASICS Gel-Kayano 29",
                "description" => "Stability running shoe for long distances",
                "price" => 160,
                "stock" => 30,
                "category" => "Shoes",
                "tags" => ["asics", "running", "stability"],
                "images" => ["Puma Suede Classic XXI.png"],
                "ratings" => ["average" => 4.9, "count" => 120],
                "like_count" => 280
            ],
            [
                "_id" => "7a1b2c3d4e5f6a7b8c9d0e8f",
                "name" => "Reebok Club C 85",
                "description" => "Vintage tennis-style leather sneakers",
                "price" => 75,
                "stock" => 55,
                "category" => "Shoes",
                "tags" => ["reebok", "vintage", "leather"],
                "images" => ["Reebok Club C 85.webp"],
                "ratings" => ["average" => 4.7, "count" => 210],
                "like_count" => 410
            ],
            [
                "_id" => "7a1b2c3d4e5f6a7b8c9d0e9f",
                "name" => "Salomon XT-6",
                "description" => "Advanced trail running shoe for tough terrains",
                "price" => 190,
                "stock" => 20,
                "category" => "Shoes",
                "tags" => ["salomon", "trail", "hiking"],
                "images" => ["Salomon XT-6.jpg"],
                "ratings" => ["average" => 4.9, "count" => 90],
                "like_count" => 550
            ],
            [
                "_id" => "7a1b2c3d4e5f6a7b8c9d0f0f",
                "name" => "Dr. Martens 1460 Boot",
                "description" => "Classic 8-eye smooth leather boot",
                "price" => 170,
                "stock" => 40,
                "category" => "Shoes",
                "tags" => ["drmartens", "boots", "leather"],
                "images" => ["Vans Old Skool.avif"],
                "ratings" => ["average" => 4.8, "count" => 300],
                "like_count" => 950
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
