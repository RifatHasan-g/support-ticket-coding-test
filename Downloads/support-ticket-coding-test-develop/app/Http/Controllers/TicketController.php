<?php

namespace App\Http\Controllers;


use App\Models\Ticket;
use App\Models\TicketResponse;
use App\Mail\TicketNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
class TicketController extends Controller
{
    public function index() {
        $tickets = Auth::user()->role === 'admin' ? Ticket::all() : Auth::user()->tickets;
        return view('tickets.index', compact('tickets'));
    }
    public function create() {
        return view('tickets.create');
    }

    public function store(Request $request) {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'priority' => 'required|in:low,medium,high',
        ]);
    
        
        $ticket = Ticket::create([
            'user_id' => Auth::id(),
            'title' => $request->title,
            'description' => $request->description,
            'priority' => $request->priority,
        ]);
    
        
        Mail::to('ytub779@gmail.com')->send(new TicketNotification($ticket));
    
        return redirect()->route('tickets.index')->with('success', 'Ticket created successfully.');
    }
    

    public function show(Ticket $ticket) {
        if (Auth::user()->role !== 'admin' && $ticket->user_id !== Auth::id()) {
            abort(403);
        }
        return view('tickets.show', compact('ticket'));
    }

    public function close(Ticket $ticket) {
        if (Auth::user()->role !== 'admin') {
            return redirect()->route('tickets.index')->with('error', 'You do not have permission to close this ticket.');
        }

        $ticket->update(['status' => 'closed']);

        
        Mail::to($ticket->user->email)->send(new TicketNotification($ticket, 'closed'));

        return redirect()->route('tickets.index')->with('success', 'Ticket closed successfully.');
    }

    public function respond(Request $request, Ticket $ticket) {
        if (Auth::user()->role !== 'admin') {
            return redirect()->route('tickets.index')->with('error', 'You do not have permission to respond to this ticket.');
        }
    
        $request->validate(['response' => 'required|string']);
    
        $response = TicketResponse::create([
            'ticket_id' => $ticket->id,
            'user_id' => Auth::id(), 
            'response' => $request->response,
        ]);
    
        
        Mail::to($ticket->user->email)->send(new TicketNotification($ticket, 'response'));
    
        return redirect()->route('tickets.show', $ticket->id)->with('success', 'Response added successfully.');
    }
}    
