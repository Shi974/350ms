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
}
