<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // linking to users table
            $table->foreignId('ticket_id')->constrained('tickets')->onDelete('cascade'); // linking to tickets table
            $table->string('title');
            $table->string('name');
            $table->string('nationality');
            $table->date('date_of_birth');
            $table->string('chosen_seat');
            $table->string('phone');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
