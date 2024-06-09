<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public static function initializeRoutes()
    {
        Route::post('/booking', [self::class, 'store'])->name('create_booking');
        Route::delete('/booking/{id}', [self::class, 'delete'])->name("delete_booking");
        Route::put('/booking/{id}', [self::class, 'edit'])->name("edit_booking");
        Route::put('/booking/{id}/{new_ticket_id}', [self::class, 'reschedule'])->name("reschedule_booking");
    }

    public function store(Request $request)
    {
        $booking = new Booking($request->all());
        $booking->user_id = Auth::user()->id;

        $ticket = Ticket::find($booking->ticket_id);
        $seatToRemove = $booking->chosen_seat;
        $availableSeats = $ticket->available_seats;
        $index = array_search($seatToRemove, $availableSeats);
        if ($index !== false) {
            array_splice($availableSeats, $index, 1);
            $ticket->available_seats = $availableSeats;
            $ticket->save();
        }
        $booking->save();
        response()->json($booking, 201);
        return redirect()->route('bookings');
    }

    public function delete(Request $request) {
        $booking_data = Booking::find($request->id);
        $ticket_data = $booking_data->ticket()->get()[0];
        $newAvailableSeats = $ticket_data->available_seats;
        $newAvailableSeats[] = $booking_data->chosen_seat;
        $ticket_data->available_seats = $newAvailableSeats;
        $ticket_data->save();
        $booking_data->delete();
        return redirect()->route('bookings')->with('alert', "Row Deleted Successfully");
    }

    public function edit(Request $request) {
        $booking_data = Booking::find($request->id);
        $booking_data->title = $request->title;
        $booking_data->phone = $request->phone;
        $booking_data->date_of_birth = $request->date_of_birth;
        $booking_data->nationality = $request->nationality;
        $booking_data->save();
        return redirect()->back()->with('alert', "Traveler Details Successfully Edited");
    }

    public function reschedule(Request $request) {
        $booking_data = Booking::find($request->id);
        $ticket_data = $booking_data->ticket()->get()[0];
        $newAvailableSeats = $ticket_data->available_seats;
        $newAvailableSeats[] = $booking_data->chosen_seat;
        $ticket_data->available_seats = $newAvailableSeats;
        $ticket_data->save();
        
        $seatToRemove = $request->chosen_seat;
        $new_ticket_id = $request->new_ticket_id;
        $new_ticket = Ticket::find($new_ticket_id);
        $availableSeats = $new_ticket->available_seats;
        $index = array_search($seatToRemove, $availableSeats);
        if ($index !== false) {
            array_splice($availableSeats, $index, 1);
            $new_ticket->available_seats = $availableSeats;
            $new_ticket->save();
        }
        $booking_data->ticket_id = $new_ticket_id;
        $booking_data->save();
        return redirect()->route('bookings')->with('alert', "Reschedule successful");
    }
}
