<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppointmentsTable extends Migration
{
    /** 
     * Run the migrations.
     * 
     * @return void
           
     */
    public function up()
    {

        Schema::create('appointments', function (Blueprint $table) {
            $table->bigIncrements('a_id');
            $table->string('subject');
            $table->integer('date');
            $table->string('time');
            $table->string('location');
            $table->boolean('confirm');
            //$table->integer('id')->unsigned();
            //$table->foreign('id')->references('id')->on('owners');
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
        Schema::dropIfExists('appointments');
    }
}
