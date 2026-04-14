<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeleteUserController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $request->user()->tokens()->delete();
        $request->user()->delete();
        
        return response()->noContent();
    }
}
