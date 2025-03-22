<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('discounts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('discount_type');
            $table->decimal('discount_value',10,2)->default(0);
            $table->string('applies_to');
            $table->foreignId('product_id')->constrained('products')->nullable(); 
            $table->string('category');
            $table->decimal('min_order_amount',10,2);
            $table->decimal('max_discount',10,2);
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('discounts');
    }
};
