<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TicketPurchased;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

class TicketController extends Controller
{
    public static function initializeRoutes()
    {
        Route::get('/tickets', [self::class, 'index']);
        Route::get('/tickets/{id}', [self::class, 'show']);
        Route::post('/tickets', [self::class, 'store']);
        Route::put('/tickets/{id}', [self::class, 'update']);
        Route::delete('/tickets/{id}', [self::class, 'destroy']);
        Route::post('/tickets/search', [self::class, 'search'])->name('tickets.search');

    }

    public function index()
    {
        $tickets = TicketPurchased::orderBy('departure_time', 'asc')->get();
        return response()->json($tickets);
    }

    public function show($id)
    {
        $ticket = TicketPurchased::find($id);
        if ($ticket) {
            return response()->json($ticket);
        } else {
            return response()->json(['message' => 'Ticket not found'], 404);
        }
    }

    public function store(Request $request)
    {
        $ticket = new TicketPurchased($request->all());
        $ticket->user_id = Auth::user()->id;
        $ticket->save();
        response()->json($ticket, 201);
        return redirect()->route('purchase_success', ["ticket_id" => $ticket]);
    }

    public function update(Request $request, $id)
    {
        $ticket = TicketPurchased::find($id);
        if ($ticket) {
            $ticket->update($request->all());
            return response()->json($ticket);
        } else {
            return response()->json(['message' => 'Ticket not found'], 404);
        }
    }

    public function destroy($id)
    {
        $ticket = TicketPurchased::find($id);
        if ($ticket) {
            $ticket->delete();
            return response()->json(['message' => 'Ticket deleted']);
        } else {
            return response()->json(['message' => 'Ticket not found'], 404);
        }
    }

    public static function getCities()
    {
        return [
            ['city' => 'Jakarta', 'code' => 'CGK', 'country' => 'Indonesia'],
            ['city' => 'Kuala Lumpur', 'code' => 'KUL', 'country' => 'Malaysia'],
            ['city' => 'Singapore', 'code' => 'SIN', 'country' => 'Singapore'],
            ['city' => 'Bangkok', 'code' => 'BKK', 'country' => 'Thailand'],
            ['city' => 'Manila', 'code' => 'MNL', 'country' => 'Philippines'],
            ['city' => 'Hanoi', 'code' => 'HAN', 'country' => 'Vietnam'],
            ['city' => 'Ho Chi Minh City', 'code' => 'SGN', 'country' => 'Vietnam'],
            ['city' => 'Phnom Penh', 'code' => 'PNH', 'country' => 'Cambodia'],
            ['city' => 'Yangon', 'code' => 'RGN', 'country' => 'Myanmar'],
            ['city' => 'Bandar Seri Begawan', 'code' => 'BWN', 'country' => 'Brunei']
        ];
    }
}
