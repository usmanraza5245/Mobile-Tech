<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Connectivity extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('connectivity', function(Blueprint $table){
            $table->string('wlan');
            $table->string('bluetooth');
            $table->string('gps');
            $table->string('radio');
            $table->string('usb');
            $table->string('nfc');
            $table->string('data');
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
