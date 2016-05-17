<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data', function (Blueprint $table) {
            $table->increments('id');
            $table->string('model');
            $table->float('price');
            $table->string('tax_price');
            $table->integer('quantity');
            $table->integer('minimum_quantity');
            $table->string('seo_keyword');
            $table->date('date_available');
            $table->string('weight');
            $table->boolean('status');
            $table->string('image',500);
            $table->integer('product_id')->unsigned();
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
        Schema::drop('data');
    }
}
