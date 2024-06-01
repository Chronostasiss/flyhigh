<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketPurchasedTable extends Migration
{
    public function up()
    {
        Schema::create('ticket_purchased', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('flight_number');
            $table->string('departure_city');
            $table->string('arrival_city');
            $table->timestamp('departure_time')->nullable();
            $table->timestamp('arrival_time')->nullable();
            $table->decimal('price', 8, 2);
            $table->string('seat_number');
            $table->string('class'); // e.g., Economy, Business, First Class
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ticket_purchased');
    }
}
