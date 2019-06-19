<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\User;
use App\Role;
use DB;


class ProfilController extends Controller
{
 public function profil(){
     
    $users = Auth::user();
    
    return view('profil',['users' => $users]);
    }
    public function edit($id) //fonction pour le bouton modifier
    {   
        $users = User::where('id' , $id)->first();
        return view('profil_update', ['users' => $users]);
    }

      
    public function update($id,Request $request ) //fonction pour maj profil user
    { 
      // dd($request-> all());


     $users= $request -> all();

       $request->validate ([
        "firstname" => 'required',
        "lastname" => 'required',        
        "age" => 'required',
        "email" => 'required',
        "phone" => 'required',
        "pseudo" => 'required']);
        
          User::where('id', $id)->update([
            'firstname' => $request->prenom,
        'lastname' => $request->nom,
        'email' => $request->email,
        'phone' => $request->phone,
        'pseudo' => $request->pseudo]);

        return redirect()-> action('ProfilController@profil');
          }

    public function ajoutAvatar(){
      

        request()->validate([

            'avatar' => ['required', 'image']
        ]);

    $path = request('avatar')->store('avatars', 'public');

            auth()->user()->update([
                'avatar' => $path,

            ]);

        // flash("Votre avatar a bien été mis à jour !")->success();

       return back();
    }







}
