<?php

namespace App\Http\Controllers;

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
        return view('events');
    }
}
