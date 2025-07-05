<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
            'wishlist' => [],
            'liked_products' => [],
            'role' => 'admin',
            'address' => [
                'street' => 'Jl. Sudirman',
                'city' => 'Jakarta',
                'zip' => '12345'
            ]
        ]);
    }
}
