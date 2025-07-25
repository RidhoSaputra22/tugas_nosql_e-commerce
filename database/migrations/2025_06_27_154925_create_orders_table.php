<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('mongodb')->create('orders', function ($collection) {
            $collection->index('user_id');
            $collection->index('status');
        });
    }

    public function down(): void
    {
        Schema::connection('mongodb')->drop('orders');
    }
};
