<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class() extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('file_products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('file_id');
            $table->foreignId('product_id');
            $table->timestamps();
        });
    }
};
