<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCompanyRequest;
use App\Http\Requests\UpdateCompanyRequest;
use App\Http\Resources\CompanyResource;
use App\Http\Resources\CompanyResourceCollection;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use App\Models\Company;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): CompanyResourceCollection
    {
        return new CompanyResourceCollection(
            Company::with('jobPosts')->get()
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCompanyRequest $request): JsonResponse
    {
        $company = Company::create($request->validated());
        return response()->json($company, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Company $company): CompanyResource
    {
        return new CompanyResource(
            $company->load('jobPosts')
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCompanyRequest $request, Company $company): JsonResponse
    {
        $company->update($request->validated());
        return response()->json($company);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company): Response
    {
        $company->delete();
        return response()->noContent();
    }
}