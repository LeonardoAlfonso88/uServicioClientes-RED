<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestTable extends Migration
{

    public function up()
    {
        Schema::create('Test', function(Blueprint $table) {
            $table->increments('id');
            $table->string('Name');
            // Constraints declaration

        });
    }

    public function down()
    {
        Schema::drop('Test');
    }
}
