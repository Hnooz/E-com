<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
          $table->BigIncrements('id');
          $table->unsignedBigInteger('categoryId')->nullable();
          $table->string('name');
          $table->text('description');
          $table->integer('price');
          $table->string('country_made');
          $table->string('status');
          $table->timestamps();

          $table->foreign('categoryId')->references('id')->on('categories')->onDelete('cascade');
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
