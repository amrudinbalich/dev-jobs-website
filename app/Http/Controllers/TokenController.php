<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class TokenController extends Controller
{
    /**
     * Create token for the authenticated user.
     * @param LoginUserRequest $request
     * @return JsonResponse
     */
    public function create(LoginUserRequest $request): JsonResponse
    {
        $validated = $request->validated();
        $user = User::where('email', $validated['email'])->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }

        $token = $user->createToken($validated['device_name'] ?? 'api-token')->plainTextToken;
 
        return response()->json([
            'token' => $token,
        ]);
    }

    /**
     * Revoke user token.
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function revoke(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
        return response()->noContent();
    }
}
