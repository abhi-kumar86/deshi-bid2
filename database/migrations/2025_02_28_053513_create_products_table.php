<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Seller
            $table->string('name');
            $table->text('description');
            $table->string('category');
            $table->decimal('starting_price', 10, 2);
            $table->decimal('reserve_price', 10, 2)->nullable();
            $table->string('images')->nullable();
            $table->string('status')->default('active'); // active, sold
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};

