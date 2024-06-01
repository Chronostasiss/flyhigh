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
    }

    public function index()
    {
        $tickets = TicketPurchased::all();
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
}
