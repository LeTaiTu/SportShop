<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_kind');
            $table->integer('id_producer');
            $table->string('name_pro', 150)->nullable();
            $table->string('image')->nullable();
            $table->integer('quantity')->nullable();
            $table->integer('original_price')->nullable();
            $table->integer('sell_price')->nullable();
            $table->string('content')->nullable();
            $table->integer('view')->default(0)->nullable();
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
