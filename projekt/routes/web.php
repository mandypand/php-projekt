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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});


Route::resource('movies', 'PagesController'); 

// Route::get('/movies/create', 'PagesController@create');

Route::resource('images', 'ImagesController');

// Route::get('/movies', 'PagesController@home');

// Route::get('/movies/{movie}', 'ReviewController@create');
// Route::post('/movies', 'ReviewController@store');





