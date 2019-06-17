<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Suggestion;

class SuggestionsController extends Controller
{  
    // ----------------------------- CRUD SUGGESTIONS -----------------------------
    // FORMULAIRE SUGGESTION -------------------------
    public function form_suggestions(){
        $suggestions = Suggestion::get();
        return view("suggestions",["suggestions"=> $suggestions]);
    }
    // CREATE SUGGESTION -----------------------------
    public function store_suggestion(Request $request){
        dd($request->all());
        $suggestion = new Suggestion;
        $request->validate([
            "titre"=> "required",
            "message"=>"required|max:500",
        ]);
        $suggestion->titre = $request->titre;
        $suggestion->message = $request->message;
        $suggestion->save();
        //return redirect()->action("ProductController@indexall");
    }
    // FIN CREATE SUGGESTION --------------------------
    // ----------------------------- FIN CRUD SUGGESTIONS -----------------------------

}
