<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function viewHomePage() {
        return view('home');
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

    public function processForm(Request $request){
        $event = new Event();
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
    public function delete($id)
    {
        
        $event = Event::findOrFail($id);
        $event =  Event::where("id", $id);
        $event->delete();
        return back();
    }
}
