<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketPurchased extends Model
{
    use HasFactory;

    protected $table = 'ticket_purchased';

    protected $fillable = [
        'user_id', 
        'flight_number', 
        'departure_city', 
        'arrival_city', 
        'departure_time', 
        'arrival_time', 
        'price', 
        'seat_number', 
        'class'
    ];

    protected $casts = [
        'user_id' => 'integer',
        'departure_time' => 'datetime',
        'arrival_time' => 'datetime',
        'price' => 'decimal:2',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
