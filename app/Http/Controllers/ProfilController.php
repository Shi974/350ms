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
