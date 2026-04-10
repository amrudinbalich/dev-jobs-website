<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\JobPostController;
use Illuminate\Support\Facades\Route;

Route::apiResource('job-posts', JobPostController::class);
Route::apiResource('companies', CompanyController::class);