<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->string('airline_name');
            $table->string('flight_code');
            $table->string('flight_type');
            $table->string('baggage');
            $table->float('price', 8);
            $table->dateTime('departure_time');
            $table->dateTime('arrival_time');
            $table->json('available_seats'); 
            $table->string('departure_city');
            $table->string('departure_city_code');
            $table->string('departure_country');
            $table->string('arrival_city');
            $table->string('arrival_city_code');
            $table->string('arrival_country');
            $table->string('img_link');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tickets');
    }
}