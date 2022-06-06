<?php

namespace App\Http\Controllers;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Foundation\Auth\EmailVerificationRequest;


class AuthController extends Controller
{
    public function register(Request $request) 
    {
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'user_type' => 'required|string',
            'phone_number' => 'required|numeric',
            'status' => 'string',
            'address' => '',
            'password' => [
                'required',
                'confirmed',
                Password::min(6)->mixedCase()->numbers()->symbols()
            ]
        ]);

        $user = User::create([
            'name' => $data['name'],
            'slug' => Str::slug($data['name']),
            'user_type' => $data['user_type'],
            'email' => $data['email'],
            'phone_number' => $data['phone_number'],
            'status' => $data['status'],
            'address' => $data['address'],
            'password' => bcrypt($data['password']),
        ]);
        
        $token = $user->createToken('main')->plainTextToken;

        return response([
            'user' => $user,
            'token' => $token
        ]);

        // event(new Registered($user));
        // return response('registeration successfull', 200);
    }

    public function resendemailverificationlink (Request $request)
    {   
        $request->user()->sendEmailVerificationNotification();

        return response('verification message successfully sent', 200);
    }

    public function verified(EmailVerificationRequest $request) 
    {
            $request->fulfill();

            return response('', 200);
    }

    public function login(Request $request) {
                
        $credentials = $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required',
            'remember' => 'boolean'
        ]);

        $remember = $credentials['remember'] ?? false;
        unset($credentials['remember']);

        if (!Auth::attempt($credentials, $remember)) {
            return response([
                'error' => 'The provided credentials are not correct'
            ], 422);
        }
        $user = Auth::user();
        $token = $user->createToken('main')->plainTextToken;

        return response([
            'user' => $user,
            'token' => $token,
        ]);
    }

    public function logout() 
    {
        $user = Auth::user();
        $user->currentAccessToken()->delete();
        return response([
            'success' => true,
        ]);
    }
}
