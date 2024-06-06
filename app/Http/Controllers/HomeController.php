<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Models\TicketPurchased;
use Illuminate\Http\Request;

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
    public function index()
    {
        $data = Ticket::all();
        return view('dashboard', compact('data'));
    }

    public function tickettest() {
        return view('tickettest');
    }

    public function purchase_success(Request $request) {
        $ticket = TicketPurchased::find($request->get('ticket_id'));
        return view ('purchase_success')->with('ticket', $ticket);
    }
}
