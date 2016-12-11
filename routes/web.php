<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/', 'StartController@actualPastes');

Route::get('{id}', 'StartController@getPaste')->where('id', '[0-9, a-z, A-Z]+')->name('showPasta');

Route::post('/add', 'StartController@addPaste')->name('addPaste');
