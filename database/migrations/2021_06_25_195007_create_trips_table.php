<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTripsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trips', function (Blueprint $table) {
            $table->id();
            $table->string('trip_no');
            $table->string('travel_date')->nullable();
            $table->string('arrival_date')->nullable();
            $table->string('depart_from')->nullable();
            $table->string('arrive_at')->nullable();
            $table->string('departure_time')->nullable();
            $table->string('arrival_time')->nullable();
            $table->double('price');
            $table->boolean('status');
            $table->integer('available_seats_from');
            $table->integer('available_seats_upto');
            $table->integer('allowable_luggage');
            $table->double('extra_luggage_fee');
            $table->double('total_trip_days_for')->default(1);
            $table->bigInteger('bus_id')->unsigned();
            $table->foreign('bus_id')->references('id')->on('buses')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('trips');
    }
}
