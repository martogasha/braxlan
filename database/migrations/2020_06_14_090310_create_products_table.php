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
            $table->string('product_name');
            $table->string('product_desc');
            $table->integer('product_price');
            $table->mediumText('product_image');
            $table->mediumText('product_image1')->nullable();
            $table->mediumText('product_image2')->nullable();
            $table->mediumText('product_image3')->nullable();
            $table->integer('user_id');
            $table->string('product_category');
            $table->string('product_status')->nullable();

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
