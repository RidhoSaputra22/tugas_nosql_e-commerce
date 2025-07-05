<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $user = User::first();

        Comment::create([
            'user_id' => $user->_id,
            'content' => 'These shoes are awesome!'
        ]);
    }
}
