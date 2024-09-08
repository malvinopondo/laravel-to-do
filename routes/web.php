<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/activities', function () {
    return view('activities');
});

Route::get('/items', function () {
    return view('items');
});




