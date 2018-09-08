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

Route::get('/clasament/liga/{liga}', 'HomeController@clasament')->name('clasament');
Route::post('/clasament/adauga-scor', 'HomeController@adaugaScor')->name('adauga-scor');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/auth/facebook',          'Auth\SocialAuthController@redirect');
Route::get('/auth/facebook/callback', 'Auth\SocialAuthController@handleProviderCallback');

Route::get('/contact', 'HomeController@contact')->name('contact');
