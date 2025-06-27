<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('mongodb')->create('products', function ($collection) {
            $collection->index('category');
            $collection->index('tags');
            $collection->index('name');
        });
    }

    public function down(): void
    {
        Schema::connection('mongodb')->drop('products');
    }
};
