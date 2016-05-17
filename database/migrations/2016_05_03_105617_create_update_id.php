<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUpdateId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::update("ALTER TABLE products AUTO_INCREMENT = 100000;");
        DB::update("ALTER TABLE manufactures AUTO_INCREMENT = 100000;");
        DB::update("ALTER TABLE reviews AUTO_INCREMENT = 100000;");
        DB::update("ALTER TABLE categories AUTO_INCREMENT = 10001;");
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
