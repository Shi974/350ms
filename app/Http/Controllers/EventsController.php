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

    public function create() {
        return view('admin.events_form_new');
    }

    public function store(Request $request) { 
        // dd($request->all()); 

        $request->validate([  //validation côté serveur
            'jeu'=>'required|max:255',
            'date'=> 'required',
            'horaire_debut'=> 'required',
            'lieu'=> 'required',
            'nb_place'=>'required',
        ]);

        $event = new Event;
        $event->jeu = $request['jeu'];
        $event->date =$request['date'];
        $event->horaire_debut =$request['horaire_debut'];
        $event->duree =$request['duree'];
        $event->lieu = $request['lieu'];
        $event->nb_place =$request['nb_place'];
        $event->nb_place_reserve = $request['nb_place_reserve'];
        $event->fin_inscription =$request['fin_inscription'];
        $event->image = $request['image'];
        $event->recompense =$request['recompense'];
        $event->prix = $request['prix'];

        $event->save();
        return redirect()->action("EventsController@indexAllEvents");

    }
    
    //RETRIEVE DE TOUS LES EVENTS - USERS
    public function indexEvent() {
        $events = Event::all();
        return view('events', ['events' => $events]);
    }
}
