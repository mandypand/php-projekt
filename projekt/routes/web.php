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

Route::resource('movies', 'MoviesController'); 

// Route::get('/movies/create', 'PagesController@create');

Route::resource('images', 'ImagesController');

// Route::get('/movies', 'PagesController@home');

Route::resource('admin', 'AdminController');
Route::resource('reviews', 'ReviewController');

// Route::get('/movies/create', 'ReviewController@create');
// Route::post('/movies', 'ReviewController@store');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
