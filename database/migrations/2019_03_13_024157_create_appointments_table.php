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
            $table->integer('time');
            $table->string('location');
            $table->boolean('confirm');
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
