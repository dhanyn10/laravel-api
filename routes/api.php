<?php

use Illuminate\Http\Request;

Route::get('/', 'APIController@index');
Route::post('/', 'APIController@insert');