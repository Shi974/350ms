<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class EventsController extends Controller
{
    // RETRIEVE DE TOUS LES EVENTS - ADMIN
    public function indexAllEvents() {
        $events = Event::all();
        return view('admin.events_crud', ['events' => $events]);
    }
}
