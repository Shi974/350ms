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


Route::get('/welcome', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

<<<<<<< HEAD
Route::get('/events', function (){
    return view('events');
});

Route::get('/suggestions', function (){
    return view('suggestions');

});
=======
Route::get('/suggestions', 'SuggestionsController@form_suggestions');

Route::post('/suggestions/create', 'SuggestionsController@store_suggestion');
>>>>>>> 5ccec07d90a058a51857e7e98704e8fa658297c6
