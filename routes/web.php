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
//Route Web Page
Route::get('/', function () {
    return view('frontend.index');
});

Route::get('catalog', function () {
    return view('frontend.catalog');
});

Route::get('details', function () {
    return view('frontend.details');
});

Route::get('about', function () {
    return view('frontend.about');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route For Backend
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/', function () {
        return view('admin.index');
    });
    Route::resource('kategori', 'Kategori_Controller');
    Route::resource('tag', 'Tag_Controller');
    Route::resource('artikel', 'Artikel_Controller');
});