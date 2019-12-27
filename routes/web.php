<?php

Route::resource('posts', 'PostController');

Route::get('/', function () {
    return view('/index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/count', 'PostController@count');

Route::get('/overview', 'HomeController@overview');

