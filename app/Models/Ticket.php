<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $casts = [
        'available_seats' => 'array',
    ];

    protected $fillable = [
        'airline_name', 'flight_code', 'flight_type', 'baggage', 'price', 'departure_time', 'arrival_time', 'available_seats'
    ];
}
