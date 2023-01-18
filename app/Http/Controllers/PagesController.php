<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;

class PagesController extends Controller
{
    public function viewHomePage() {
        return view('home');
    }
    public function viewPublicEventsPage() {
        $allEvents = Event::all();
        return view('publicevents',['events' => $allEvents]);
    }
    public function viewBuyTicketPage($id){
        $event = Event::findOrFail($id);
        return view('buyticket',['event' => $event]);
    }
    public function viewMyTicketsPage(){
        $allTickets = Ticket::all();
        return view('mytickets',['tickets' => $allTickets]);
    }
    public function viewContactPage() {
        return view('contact');
    }
    public function viewOveronsPage() {
        return view('overons');
    }
    public function viewEventsPage() {
        $allEvents = Event::all();
        return view('events',['events' => $allEvents]);
    }
    public function viewEditPage($id) {
        $event = Event::findOrFail($id);
        return view('edit',['event' => $event]);
    }

    public function processForm(Request $request){


        $newImageName = uniqid() . '-' . $request->title . '.' .
        $request->image->extension();

        $request->image->move(public_path('images'), $newImageName);


        $event = new Event();
        $event->name = $request->input('name');
        $event->photo = $newImageName;
        $event->event_start = $request->input('event_start');
        $event->event_end = $request->input('event_end');
        $event->available_tickets = $request->input('available_tickets');
        $event->price = $request->input('price');
        $event->location = $request->input('location');
        $event->description = $request->input('description');
        $event->save();

        return redirect()->route('home');
    }
    public function delete($id)
    {
        
        $event = Event::findOrFail($id);
        $event =  Event::where("id", $id);
        $event->delete();
        return back();
    }
    public function edit($id, Request $request)
    {
        $event = Event::where("id", $id)->first();
        $event->name = $request->input('name');
        $event->photo = $request->input('photo');
        $event->event_start = $request->input('event_start');
        $event->event_end = $request->input('event_end');
        $event->available_tickets = $request->input('available_tickets');
        $event->price = $request->input('price');
        $event->location = $request->input('location');
        $event->description = $request->input('description');
        $event->save();
        return redirect()->route('home');
    }
    public function createTicket($id, Request $request){

        $ticket = new Ticket();
        $ticket->buyer_id = auth()->user()->id;
        $ticket->event_id = $id;
        $ticket->save();

        $event = Event::where("id", $id)->first();
        $event->available_tickets = $event->available_tickets - 1;
        $event->save();

        return redirect()->route('home');
    }
}
