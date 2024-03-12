<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {

        // echo "der";
        $name         = $request->input('name');
        $email        = $request->input('email');
        $password     = $request->input('password');
        // $role         = 2;

        $user = User::create([
            'name'      => $name,
            'email'     => $email,
            'password'  => Hash::make($password),
            'role_id' => 2
        ]);

        if ($user) {
            return response()->json([
                'success' => true,
                'message' => 'Register Berhasil!'
            ], 201);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Register Gagal!'
            ], 400);
        }
    }
}
