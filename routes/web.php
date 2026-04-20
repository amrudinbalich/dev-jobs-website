<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// serve react app
Route::get('/{any}', function () {
    return view('app');
})->where('any', '.*');