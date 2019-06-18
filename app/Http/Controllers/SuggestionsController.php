<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Suggestion;

class SuggestionsController extends Controller
{  
    //! ----------------------------- CRUD SUGGESTIONS -----------------------------
    // FORMULAIRE SUGGESTION -------------------------
    public function form(){
        return view("formulaire-suggestions");
    }
    // CREATE SUGGESTION -----------------------------
    public function store(Request $request){
        //dd($request->all());
        //dd(Auth::user()->id);
        $suggestion = new Suggestion;
        $request->validate([
            "titre"=> "required",
            "message"=>"required|max:500",
        ]);
        $auth = Auth::user()->id;   //* On récupère l'id de la personne connecté
        $suggestion->titre = $request->titre;
        $suggestion->user_id = $auth;    //* On place l'id dans le user_id
        $suggestion->message = $request->message;
        $suggestion->save();
        //! Ne plas oublier de return vers une page validation du formulaire
    }

    // READ SUGGESTION -------------------------------
    public function read() {
        //d(Suggestion::get());
        $suggestions = Suggestion::get();
        return view("suggestions",["suggestions"=> $suggestions]);
    }

    // DESTROY SUGGESTION -----------------------------
    public function destroy($id)
    {
        Suggestion::where('id',$id)->delete();
        return redirect()->action('SuggestionsController@read');
    }
    //! FIN CREATE SUGGESTION --------------------------
    // ----------------------------- FIN CRUD SUGGESTIONS -----------------------------

}
