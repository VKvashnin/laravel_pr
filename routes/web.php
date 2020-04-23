<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', 'MovieController@index')->name('home');

Route::get('movie/{id}','MovieController@show');

//sort
Route::get('sort/year/{year}', 'SortController@year')->name('sort.year');
Route::get('sort/genre/{genre}', 'SortController@genre')->name('sort.genre');
Route::get('sort/country/{country}', 'SortController@country')->name('sort.country');
//sort


Route::view('about', 'about')->name('about');

Route::get('users', 'UserController@users')->name('users');
Route::get('posts/{post}', 'UserController@index');

Route::get('/profile','ProfileController@index')->name('profile');

Auth::routes();
Route::post('/login', [
    'uses'          => 'Auth\LoginController@login',
    'middleware'    => 'checkstatus',
]);
Route::get('login/facebook', 'Auth\LoginController@redirectToFacebookProvider')->name('facebook.login');
Route::get('user/facebook', 'Auth\LoginController@providerFacebookCallback');

//routes admin
Route::prefix('admin')
    ->middleware(['auth', 'role:1'])
    ->name('admin.')
    ->group(function() {
        Route::view('/', 'layouts/admin')->name('admin');
        Route::resource('/countries','CountryController');
        Route::resource('/genres','GenreController');
        Route::resource('/users','UserController');
        Route::resource('/years','YearController');
        Route::get('years/confirm', 'YearController@confirm');
});

//users factory
Route::get('set-users', 'SetTestUsersController@set');
Route::get('get-users', 'GetUsersController@get');
//users factory

Route::prefix('moderate')
    ->middleware(['auth', 'role:2'])
    ->name('moderate.')
    ->group(function() {
        Route::view('/', 'layouts/moderate')->name('admin');
        Route::get('add','MovieController@create');
});

//add Files
Route::get('/files', 'Dashboard\Files\FileController@index');

