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

 Route::resource('item', 'ItemController');
 Route::get('/', 'HomeController@index');
 Route::get('/contact', 'ContactController@create')->name('contact.create');
 Route::post('/contact', 'ContactController@send')->name('contact.send');

