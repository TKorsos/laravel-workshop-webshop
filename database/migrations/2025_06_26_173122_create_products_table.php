<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string("sku")->nullable();
            $table->string('name');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('manufacturer_id');
            $table->integer('price')->default(0);
            $table->integer('hot_price')->default(0);
            $table->integer('selling_price')->default(0);
            $table->text('description')->nullable();
            $table->integer('viewed')->default(0);
            $table->integer('quantity')->default(1);

            $table->integer('d_width')->default(0);
            $table->integer('d_height')->default(0);
            $table->integer('d_deep')->default(0);
            $table->integer('weight')->default(0);
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
