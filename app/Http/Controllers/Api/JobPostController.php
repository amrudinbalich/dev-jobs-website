<?php

namespace App\Http\Controllers\Api;

use Symfony\Component\HttpFoundation\JsonResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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
    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'title' => 'required|string|min:3|max:255',
            'description' => 'required|string|min:10|max:5000'
        ]);

        $jobPost = JobPost::create($validated);
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
    public function update(Request $request, JobPost $jobPost): JsonResponse
    {
        $validated = $request->validate([
            'title' => 'sometimes|string|min:3|max:255',
            'description' => 'sometimes|string|min:10|max:5000'
        ]);

        $jobPost->update($validated);

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
