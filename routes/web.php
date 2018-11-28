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
    return view('homepage');
});

Route::get('/opleidingen', function () {
    return view('opleidingen');
});

Route::get('/news', function () {
    return view('news');
});

Route::get('/contact', 'ContactFormController@showForm' )
    ->name ('contact.form');

Route::post('/contact',	'ContactFormController@handleForm')
    ->name('contact.form.handle');

Route::get('/contact/bevestiging', 'ContactFormController@confirmationPage')
    ->name('contact.confirmation');

Route::get('/buyer-test', 'BuyerController@buyer');