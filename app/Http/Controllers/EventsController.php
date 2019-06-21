<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Evenement;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\DB;

class EventsController extends Controller
{
    // RETRIEVE DE TOUS LES EVENTS - ADMIN
    public function indexAllEvents() {
        $events = Evenement::all();
        return view('admin.events_crud', ['events' => $events]);
    }

    // CREATE EVENTS
    public function create() {
        return view('admin.events_form_new');
    }

    public function store(Request $request) { 
        // dd($request->all()); 

        $request->validate([
            'jeu'=>'required|max:255',
            'date'=> 'required',
            'horaire_debut'=> 'required',
            'lieu'=> 'required',
            'nb_place'=>'required',
        ]);

        $event = new Evenement;
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

    // EDIT + UPDATE EVENTS
    public function edit($id) {
        //dd($id);
        $event=Evenement::find($id);
        return view('admin.events_form_edit', ['event'=>$event]);
    }

    public function update(Request $request, $id) {
        //dd($id);
        $request->validate([
            'jeu'=>'required|max:255',
            'date'=> 'required',
            'horaire_debut'=> 'required',
            'lieu'=> 'required',
            'nb_place'=>'required',
        ]);

        $event = Evenement::where('id',$id)->first();

        $event->jeu = $request->jeu;
        $event->date = $request->date;
        $event->horaire_debut = $request->horaire_debut;
        $event->duree = $request->duree;
        $event->lieu = $request->lieu;
        $event->nb_place = $request->nb_place;
        $event->nb_place_reserve = $request->nb_place_reserve;
        $event->fin_inscription = $request->fin_inscription;
        $event->image = $request->image;
        $event->recompense = $request->recompense;
        $event->prix = $request->prix;

        $event->update();
        return redirect()->action("EventsController@indexAllEvents");
    }

    // DELETE EVENTS
    public function destroy($id){
        //dd($id);
        Evenement::where('id',$id)
        ->delete();

        return redirect()->action("EventsController@indexAllEvents");
    }
    
    //RETRIEVE DE TOUS LES EVENTS - USERS
    public function indexEvent() {
        $events = Evenement::all();
        if (auth()->check()) {
        $user = User::find(Auth::user()->id);
        $a = DB::table("evenement_user")->where("user_id", $user->id)->get();
        } else {
            $user = "";
            $a = "";
        }

        
        

        return view('events', ['events' => $events, "user"=>$user, "a"=>$a]);
    }


    //RETRIEVE EVENT BY ID - USERS
    public function singleIndex($id){
        $event=Evenement::find($id);
        return view('idEvent', ['event'=>$event]);
    }

    public function  inscri_event ($id){
        $user = Auth::user()->id;
    
        User::find($user)->evenements()->attach($id);

        //dd(User::find($user));

        return redirect()->action("EventsController@indexEvent");
    }
   

    public function delete_event($id){
        $user = Auth::user()->id;
    
        User::find($user)->evenements()->detach($id);
        //dd($user);
        return redirect()->action("EventsController@indexEvent");
    }

    //
    public function list_user(){
        $events = Evenement::all();
        return view('admin.list_users', ['events' => $events]);
    }
}
