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

Route::get('/no_access', function () {
    return view('no_access');
});

// ---------------------------------------

// PAGES PROFIL

Route::get('/profil', 'ProfilController@profil');//profil utilisateur

Route::get('/profil/edit/{id}', 'ProfilController@edit');//route bouton modifier

Route::patch('/profil/update/{id}', 'ProfilController@update');//route formulaire de modification

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/events', 'EventsController@indexEvent');

// ---------------------------------------

// PAGE ADMIN
// Route::get('/admin', function () {
//     return view('admin.admin');
// });

Route::get('/admin', ['uses' => 'HomeController@adminPage',
                    'middleware' => 'roles',
                    'roles' => ['Admin']
]);

// ---------------------------------------
// PAGE EVÈNEMENTS - CRUD - PROTEGEES --> NEED ADMIN
// READ
Route::get('/admin/events', ['uses' => 'EventsController@indexAllEvents',
                            'middleware' => 'roles',
                            'roles' => ['Admin']
]);

// CREATE
Route::get('/admin/events/new', ['uses' => 'EventsController@create',
                                'middleware' => 'roles',
                                'roles' => ['Admin']
]);

Route::post('/admin/events/store','EventsController@store');

//EDIT
Route::get('/admin/events/edit/{id}', [ 'uses' => 'EventsController@edit',
                                        'middleware' => 'roles',
                                        'roles' => ['Admin']
]);

//UPDATE
Route::get('/admin/events/edit/{id}', [ 'uses' => 'EventsController@edit',
                                        'middleware' => 'roles',
                                        'roles' => ['Admin']
]);

// DELETE
Route::get('/admin/events/delete/{id}', ['uses' => 'EventsController@destroy',
                                        'middleware' => 'roles',
                                        'roles' => ['Admin']
]);

// ---------------------------------------

//SUGGESTIONS - CRUD

//FORMULAIRE - USERS
Route::get('/suggestions', 'SuggestionsController@form');

//CREATE
Route::post('/suggestions/create', 'SuggestionsController@store');

//READ ( ADMIN )
Route::get('/admin/suggestions', ['uses' =>  'SuggestionsController@read',
                                'middleware' => 'roles',
                                'roles' => ['Admin']
]);

//UPDATE ???

//DELETE ( ADMIN )
Route::get('/suggestions/destroy/{id}', ['uses' => 'SuggestionsController@destroy',
                                        'middleware' => 'roles',
                                        'roles' => ['Admin']
]);

// ---------------------------------------

//AJOUT AVATAR USER
Route::post('/ajout_avatar', 'ProfilController@ajoutAvatar');


//RETRIEVE EVENT BY ID - USER
Route::get('/events/details/{id}', 'EventsController@singleIndex');
