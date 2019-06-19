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

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/profil', 'ProfilController@profil');//profil utilisateur

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/events', 'EventsController@indexEvent');

// PAGE EVÈNEMENTS - CRUD
Route::get('/admin/events', 'EventsController@indexAllEvents');

//SUGGESTIONS - CRUD ---------------------
//FORMULAIRE
Route::get('/formulaire-suggestions', 'SuggestionsController@form');
//CREATE
Route::post('/suggestions/create', 'SuggestionsController@store');
//READ ( ADMIN )
Route::get('/suggestions', 'SuggestionsController@read');
//UPDATE ???
//DELETE ( ADMIN )
Route::get('/suggestions/destroy/{id}', 'SuggestionsController@destroy');
// FIN CRUD ------------------------------
