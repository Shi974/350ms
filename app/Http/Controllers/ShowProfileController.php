<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class ShowProfile extends Controller
{
   public function profil(){
     
    $users = Auth::user();
    
    return view('profil_update',['users' => $users]);
}
}