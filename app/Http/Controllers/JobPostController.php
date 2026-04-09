<?php

namespace App\Http\Controllers;

use Symfony\Component\HttpFoundation\JsonResponse;
use App\Http\Requests\StoreJobPostRequest;
use App\Http\Requests\UpdateJobPostRequest;
use App\Http\Controllers\Controller;
use App\Models\JobPost;

class JobPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        return response()->json(JobPost::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreJobPostRequest $request): JsonResponse
    {
        $jobPost = JobPost::create($request->validated());
        return response()->json($jobPost, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(JobPost $jobPost): JsonResponse
    {
        return response()->json($jobPost);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJobPostRequest $request, JobPost $jobPost): JsonResponse
    {
        $jobPost->update($request->validated());
        return response()->json($jobPost);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        JobPost::findOrFail($id)->delete();
        return response()->noContent();
    }
}