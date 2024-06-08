<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Ticket;
use App\Models\TicketPurchased;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $query = Ticket::whereJsonLength('available_seats', '>', 0);
        if ($request->input('from')) {
            $query = $query->where('departure_city_code', $request->input('from'));
        }
        if ($request->input('to')) {
            $query = $query->where('arrival_city_code', $request->input('to'));
        }
        if ($request->input('departure_date')) {
            $query = $query->where('departure_time', 'like', '%'.$request->input('departure_date').'%');
        }
        $data = $query->orderBy('departure_time', 'asc')->get();
        $cities = GeneralController::getCities();
        return view('dashboard', compact('data', 'cities'));
    }

    public function bookings() {
        $data = User::find(Auth::user()->id)->bookings()->get();
        return view('bookings', compact('data'));
    }

    public function booking_details(Request $request) {
        $traveler_details = Booking::find($request->id);
        $flight_details = $traveler_details->ticket()->get();
        return view('booking_details', compact('traveler_details', 'flight_details'));
    }

    public function book(Request $request) {
        $data = Ticket::find($request->ticket_id);
        return view('book', compact('data'));
    }

    public function reschedule(Request $request) {
        $traveler_details = Booking::find($request->id);
        $flight_details = $traveler_details->ticket()->get()[0];
        $query = Ticket::whereJsonLength('available_seats', '>', 0);
        $query = $query->where('departure_city_code', $flight_details->departure_city_code);
        $query = $query->where('arrival_city_code', $flight_details->arrival_city_code);
        $query = $query->whereNot('id', $flight_details->id);
        $data = $query->orderBy('departure_time', 'asc')->get();
        $booking_id = $request->id;
        return view('reschedule', compact('data', 'booking_id'));
    }
}
