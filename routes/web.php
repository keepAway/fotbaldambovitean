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
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/clasament/liga/{liga}/sezon/{sezon}', 'HomeController@clasament')->name('clasament');
Route::post('/clasament/adauga-scor', 'HomeController@adaugaScor')->name('adauga-scor');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/auth/facebook',          'Auth\SocialAuthController@facebookRedirect')->name('auth-facebook');
Route::get('/auth/facebook/callback', 'Auth\SocialAuthController@handleFacebookCallback');

Route::get('/auth/google', 'Auth\SocialAuthController@googleRedirect')->name('auth-google');
Route::get('/auth/google/callback', 'Auth\SocialAuthController@handleGoogleCallback');

Route::get('/contact', 'HomeController@contact')->name('contact');

Route::get('/parse-jquery/{liga}/{serie}/{etapa}', 'HomeController@parseJquery')->name('parse-jquery');
Route::get('/parse-minifotbal/{url}', 'HomeController@parseMinifotbal')->name('parse-minifotbal');
Route::get('/parse-liga-3/{url}', 'HomeController@parseLiga3')->name('parse-liga-3');


Route::post('/contact-us', 'HomeController@contactUs')->name('contact-us');

Route::get('/admin-stiri', 'HomeController@adminStiri')->name('admin-stiri');
Route::post('/admin-save-stire', 'HomeController@adminSaveStire')->name('admin-save-stire');

Route::get('/stire/{id}', 'HomeController@stireDetaliu')->name('stire-detaliu');
Route::get('/save-view/{id}', 'HomeController@saveView')->name('save-view');

Route::get('/adauga-scor', 'HomeController@getTrimiteScor')->name('trimite-scor');
Route::post('/adauga-scor', 'HomeController@addTrimiteScor')->name('add-trimite-scor');


Route::get('/scoruri-primite', 'HomeController@scoruriPrimite')->name('scoruri-primite');
Route::get('/useri', 'HomeController@useri')->name('useri');

Route::get('/disable/{id}', 'HomeController@disableUser')->name('disable');

Route::post('/etapa-curenta', 'HomeController@etapaCurenta')->name('etapa-curenta');

Route::get('/termeni-si-conditii', 'HomeController@termeni')->name('termeni');
Route::get('/confidentialitate', 'HomeController@confidentialitate')->name('confidentialitate');

Route::post('/clasament/adauga-penalizare', 'HomeController@adaugaPenalizare')->name('adauga-penalizare');

Route::get('/etapa-curenta', 'HomeController@getEtapaCurenta')->name('get-etapa-curenta');

Route::post('/adauga-data', 'HomeController@adaugaData')->name('adauga-data');



///// login & register
Route::post('login', 'Auth\LoginController@doLogin')->name('json-login');




