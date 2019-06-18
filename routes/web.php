<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route:: get ('/welcome', 'HomeController@home');

Route::get('/Events', 'HomeController@events');

Route::get('/suggestions', 'HomeController@suggest');

Route::get('/profil_update', 'ShowProfileController@profil');