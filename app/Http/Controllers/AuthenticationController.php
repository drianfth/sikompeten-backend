<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthenticationController extends Controller
{
    //
    public function login(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        
        $user = User::where('email', $request->email)->first();

        if (! $user || ! Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['email dan password tidak cocok'],
            ]);
        }

        $token = $user->createToken('user login')->plainTextToken;

        // return response()->json(["token" => $token]);
        return response()->json([
            "message"=> "Successfully logged in",
            'token' => $token
        ], Response::HTTP_OK);
    }

    public function logout(Request $request){
        $request->user()->currentAccessToken()->delete();
    }

    public function me(Request $request){
        return response()->json([
            'user' => auth()->user()
        ],Response::HTTP_OK);
    }

    public function register(Request $request){
        $data = $request->validate([
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'name' => 'required',
            'jns_kelamin' => 'required',
            'no_telp' => 'required',
            'role' => 'required'
        ]);
        $data['password'] = Hash::make($data['password']); 

        $user = User::create($data);
        
        return response()->json($data);

    }

    public function showAsesor(){
        $asesor = User::where('role','asesor')->get();
        return response()->json($asesor);
    }
    public function showUser($id){
        $asesor = User::where('id',$id)->get();
        return response()->json($asesor);
    }
}


