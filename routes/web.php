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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/events', 'EventsController@indexEvent');

// PAGE EVÈNEMENTS - CRUD
// READ
Route::get('/admin/events', 'EventsController@indexAllEvents');

// CREATE
Route::get('/admin/events/new', 'EventsController@create');
Route::post('/admin/events/store','EventsController@store');

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
