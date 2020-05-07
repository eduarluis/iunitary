<?php

Route::get('/', 'HomeController@index')->name('home.index');
Route::get('/users', 'HomeController@users')->name('home.users');
// Route::get('/call/{id}', 'HomeController@GeneratorTheTokenAndSessionIdForCalls')->name('call');