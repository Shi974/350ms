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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/events', function (){
    return view('events');
});

// PAGE EVÈNEMENTS - CRUD
Route::get('/admin/events', 'EventsController@indexAllEvents');

// PAGE SUGGESTIONS - CRUD
Route::get('/suggestions', 'SuggestionsController@form_suggestions');

Route::post('/suggestions/create', 'SuggestionsController@store_suggestion');
