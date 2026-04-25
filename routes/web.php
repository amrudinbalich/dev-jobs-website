<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/my-app', function () {
    return view('dashboard');
});

// serve react app
// Route::get('/{any}', function () {
//     return view('app');
// })->where('any', '.*');