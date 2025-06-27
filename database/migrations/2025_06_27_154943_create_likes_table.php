<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('mongodb')->create('likes', function ($collection) {
            $collection->index(['user_id', 'product_id']);
            $collection->index('created_at');
            $collection->index('updated_at');
        });
    }

    public function down(): void
    {
        Schema::connection('mongodb')->drop('likes');
    }
};
