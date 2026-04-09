<?php

use App\Http\Controllers\Api\JobPostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::apiResource('job-posts', JobPostController::class);