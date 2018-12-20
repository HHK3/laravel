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

Route::get('/', 'HomeController@index' )
    ->name('homepage.home');

Route::get('/opleidingen', function () {
    return view('opleidingen');
});

Route::get('/news', 'NewsController@index' )
    ->name('news');

Route::get('/news/yes' . session('formData.searchterm') . '', 'NewsController@confirmationPage')
    ->name('news.confirmation');

Route::get('/contact', 'ContactFormController@showForm' )
    ->name ('contact.form');

Route::post('/contact',	'ContactFormController@handleForm')
    ->name('contact.form.handle');

Route::get('/contact/bevestiging', 'ContactFormController@confirmationPage')
    ->name('contact.confirmation');

Route::get('/buyer-test', 'BuyerController@buyer');

Route::get('/gallery', 'PhotoGalleryController@listPhotos')
    ->name('gallery.index');

Route::get('/gallery/add-photo', 'PhotoGalleryController@showPhotoForm' )
    ->name('gallery.add-photo');

Route::post('/gallery/add-photo', 'PhotoGalleryController@savePhotoForm' )
    ->name('gallery.upload-photo');

