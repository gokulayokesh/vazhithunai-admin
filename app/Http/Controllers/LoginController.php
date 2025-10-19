<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    public function authenticate(Request $request) {

        try {
        $validator = \Validator::make($request->all(), [
            'mobile' => 'required|numeric|digits:10',
            'password' => 'required|string|min:6',    
        ]);

        if ($validator->fails()) {
            return response()->json(['message' => $validator->errors()->first(), 'status' => 400]);
        }

        $credentials = $request->only('mobile', 'password');

        if (auth()->attempt($credentials)) {
            $user = auth()->user();
            return response()->json(['message' => 'Login successful', 'user' => $user, 'status' => 200]);
        } else {
            return response()->json(['message' => 'Invalid credentials', 'status' => 400]);
        }

        } catch (\Exception $e) {
            \Log::error('LoginController->authenticate ' . $e->getMessage());
            return response()->json(['message' => 'An unexpected error occurred', 'error' => $e->getMessage(), 'status' => 500]);
        }
    }
}