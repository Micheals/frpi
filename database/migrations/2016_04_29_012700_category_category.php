<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CategoryCategory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_category', function (Blueprint $table){

        $table->integer('category_id')->unsigned();
        $table->integer('category_id1')->unsigned();
        $table->foreign('category_id')
            ->references('id')
            ->on('categories')
            ->onDelete('cascade');
        $table->foreign('category_id1')
            ->references('id')
            ->on('categories')
            ->onDelete('cascade');
        $table->primary(['category_id','category_id1']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
