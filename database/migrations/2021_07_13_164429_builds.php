<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Builds extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('builds', function(Blueprint $table){
            $table->string('operating_system');
            $table->string('user_interface');
            $table->string('dimensions');
            $table->string('weight');
            $table->string('sim');
            $table->string('color');
            $table->unsignedBigInteger('mod_id');
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
