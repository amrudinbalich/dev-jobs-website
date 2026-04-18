<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\JobPostController;
use App\Http\Controllers\TokenController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::post('users', [UserController::class, 'store']);
Route::post('token/create', [TokenController::class, 'create']);

Route::middleware('auth:sanctum')->group(function () {
    Route::delete('token/revoke', [TokenController::class, 'revoke']);
    Route::delete("users", [UserController::class, 'destroy']);
});

Route::apiResource('job-posts', JobPostController::class);
Route::apiResource('companies', CompanyController::class);
Route::apiResource('categories', CategoryController::class);

Route::get("job-posts/category/{id}", [JobPostController::class, 'whereCategory']);
Route::get("job-posts/company/{id}", [JobPostController::class, 'whereCompany']);