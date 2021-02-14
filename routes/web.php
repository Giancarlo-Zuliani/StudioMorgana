<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/' , 'MainController@index')
    -> name('index');

Auth::routes();

Route::get('/home', 'HomeController@index')
    ->name('home');

Route::get('/api/getUrl', 'ApiController@getVideoUrl')
    ->name('get-url');
