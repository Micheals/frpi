<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLenghtClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('length_classes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('label');
            $table->integer('data_id')->unsigned();
            $table->foreign('data_id')
                ->references('id')
                ->on('data')
                ->onDelete('cascade');
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
        Schema::drop('length_classes');
    }
}
