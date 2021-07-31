<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Features extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('features', function(Blueprint $table){
            $table->string('sensors');
            $table->string('audio');
            $table->string('browser');
            $table->string('messaging');
            $table->string('games');
            $table->string('torch');
            $table->string('extra');
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
