<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->string('passenger_name');
            $table->string('age');
            $table->string('gender');
            $table->integer('seat_no');
            $table->string('phone');
            $table->string('email');
            $table->boolean('is_confirmed');
            $table->string('ticket_number');
            $table->string('luggage');
            $table->double('price');
            $table->string('bank');
            $table->string('tt_number')->nullable();
            $table->bigInteger('trip_id')->unsigned();
            $table->foreign('trip_id')->references('id')->on('trips')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('tickets');
    }
}
