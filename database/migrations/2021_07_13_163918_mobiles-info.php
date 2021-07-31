<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MobilesInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mobile-info', function(Blueprint $table){
            $table->increments('id');
            $table->string('model_name');
            $table->integer('price');
            $table->string('battery');
            $table->boolean('status');
            $table->timestamps();
            $table->unsignedBigInteger('mob_id');
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
