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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->integer('products_total');
            $table->integer('total');
            $table->text('contact_data')->nullable();
            $table->text('shipping_address')->nullable();
            $table->text('billing_address')->nullable();;
            $table->integer('shipping_cost');
            $table->string('shipping_method');
            $table->unsignedBigInteger('shipping_id');
            $table->enum('status', ['pending', 'processed', 'shipping', 'success', 'failed'])->default('pending');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
