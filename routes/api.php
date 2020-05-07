<?php

use Illuminate\Http\Request;

Route::get('/call/{id}', 'HomeController@GeneratorTheTokenAndSessionIdForCalls');
Route::get('/users', 'HomeController@getUserApi');
