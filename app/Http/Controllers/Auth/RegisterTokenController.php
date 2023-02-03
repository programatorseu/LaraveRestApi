<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Throwable;

class RegisterTokenController extends Controller
{
    // 1.bierzemy requets (get) -
    // 2. podstawowa walidacja
    // 3. create model -> populate db with user 
    // 4. create token - response jako plainText 
    // 5. przy login recreate

    public function register(Request $request)
    {
        try {
            $attributes = $request->validate([
                'name' => 'required',
                'email' => 'required|email|unique:users,email',
                'password' => 'required'
            ]);
            $user = User::create([
                'name' => $attributes['name'],
                'email' => $attributes['email'],
                'password' => Hash::make($attributes['password'])
            ]);
            $token = $user->createToken('admin-token', ['create', 'update', 'delete']);

            return response()->json([
                'status' => true,
                'message' => 'Użytkownik Api utworzony',
                'token' => $token->plainTextToken
            ], 200);
        } catch (Throwable $e) {
            return response()->json([
                'status' => false,
                'message' => $e->getMessage()
            ], 500);
        }
    }
    public function login(Request $request)
    {
        try {
            $attributes = $request->validate([
                'email' => 'required',
                'password' => 'required'
            ]);
            if (!Auth::attempt($attributes)) {
                return response()->json([
                    'status' => false,
                    'message' => 'Problem z walidacja danych.',
                ], 401);
            }
            $user = User::where('email', $request->email)->first();
            return response()->json([
                'status' => true,
                'message' => 'Użytkowni Api zalogowany Pomyślnie',
                'token' => $user->createToken("API TOKEN")->plainTextToken
            ], 200);
        } catch (Throwable $err) {
            return response()->json([
                'status' => false,
                'message' => $err->getMessage()
            ], 500);
        }
    }
}
