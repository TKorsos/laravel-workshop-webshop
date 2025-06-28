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
        Schema::create('order_products', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('order_id');
            $table->unsignedBigInteger('product_id');

            $table->text('product_details_json');
            $table->integer('selling_price');
            $table->integer('quantity');
            $table->integer('subtotal');
            $table->integer('views')->default(0);
            $table->dateTime('last_viewed_at')->default(null);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_products');
    }
};
