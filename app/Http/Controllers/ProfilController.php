<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;
use Auth;

class ProfilController extends Controller
{
    public function ajoutAvatar(){
      

        request()->validate([

            'avatar' => ['required', 'image']
        ]);

    $path = request('avatar')->store('avatars');

            auth()->user()->update([
                'avatar' => $path,

            ]);

       return $path;
    }







}
