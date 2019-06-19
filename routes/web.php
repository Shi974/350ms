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


//  Route::get('/profil', function () {
//     return view('profil');
// });

Route::get('/profil', 'ProfilController@profil');//profil utilisateur

Route::get('/user/edit/{id}', 'ProfilController@edit');//route bouton modifier

Route::patch('/profil/update/{id}', 'ProfilController@update');//route formulaire de modification

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/events', 'EventsController@indexEvent');

// ---------------------------------------

// PAGE ADMIN
Route::get('/admin', function () {
    return view('admin.admin');
});

// ---------------------------------------
// PAGE EVÈNEMENTS - CRUD
// READ
Route::get('/admin/events', 'EventsController@indexAllEvents');

// CREATE
Route::get('/admin/events/new', 'EventsController@create');
Route::post('/admin/events/store','EventsController@store');

//EDIT
Route::get('/admin/events/edit/{id}', 'EventsController@edit');

//UPDATE
Route::post('/admin/events/update/{id}', 'EventsController@update');

// DELETE
Route::get('/admin/events/delete/{id}', 'EventsController@destroy');

// ---------------------------------------

//SUGGESTIONS - CRUD

//FORMULAIRE - USERS
Route::get('/suggestions', 'SuggestionsController@form');

//CREATE
Route::post('/suggestions/create', 'SuggestionsController@store');

//READ ( ADMIN )
Route::get('/admin/suggestions', 'SuggestionsController@read');

//UPDATE ???

//DELETE ( ADMIN )
Route::get('/suggestions/destroy/{id}', 'SuggestionsController@destroy');

// ---------------------------------------

Route::post('/ajout_avatar', 'ProfilController@ajoutAvatar');