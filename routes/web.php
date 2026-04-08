<?php

use App\Http\Controllers\Api\JobPostController;
use Illuminate\Support\Facades\Route;
use App\Models\JobPost;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/jobs', function (JobPost $jobPost) {
    $jobs = $jobPost->all();
    return response()->json($jobs);
});

Route::apiResource('job-posts', JobPostController::class);