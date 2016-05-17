<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttrGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attr_groups', function (Blueprint $table) {
            $table->increments('id');
            $table->string('label');
            $table->integer('sort_order');
            $table->timestamps();
        });
        DB::update("ALTER TABLE attr_groups AUTO_INCREMENT = 10000;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('attr_groups');
    }
}
