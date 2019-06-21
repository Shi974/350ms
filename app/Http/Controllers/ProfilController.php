<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\User;
use App\Role;



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
      


     $users= $request -> all();

       $request->validate ([
        "firstname" => 'required|max:255',
        "lastname" => 'required|max:255',        
        "email" => 'required|email',
        "phone" => 'required|max:10',
        "pseudo" => 'required|string']);
        
          User::where('id', $id)->update([
        'firstname' => $request->firstname,
        'lastname' => $request->lastname,
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
