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

<<<<<<< HEAD
Route::resource('movies', 'PagesController'); 
=======
Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});


Route::resource('movies', 'MoviesController'); 
>>>>>>> 48a79efab6b8c8eb8b65840fa3f77b1c84d13b2e

// Route::get('/movies/create', 'PagesController@create');

Route::resource('images', 'ImagesController');

// Route::get('/movies', 'PagesController@home');

Route::resource('admin', 'AdminController');
Route::resource('reviews', 'ReviewController');

// Route::get('/movies/create', 'ReviewController@create');
// Route::post('/movies', 'ReviewController@store');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
