<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function home(){
       return view('welcome');
   }

    public function events(){
        return view('Events');
    }


    public function suggest(){
        return view('suggestions');
    }



}
