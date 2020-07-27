<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCategoryToProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->string('product_flavour')->nullable();
            $table->string('product_flavour1')->nullable();
            $table->string('product_flavour2')->nullable();
            $table->string('product_flavour3')->nullable();
            $table->string('product_flavour4')->nullable();
            $table->string('product_flavour5')->nullable();
            $table->string('product_flavour6')->nullable();
            $table->string('product_flavour7')->nullable();
            $table->string('product_flavour8')->nullable();
            $table->string('product_flavour9')->nullable();
            $table->string('product_flavour10')->nullable();



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            //
        });
    }
}
