<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Request as FacadesRequest;


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Tymon\JWTAuth\Facades\JWTAuth;
class AuthentController extends Controller
{
    public function login(Request $request)
    {
        // Validation des données
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Tentative d'authentification
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect()->route('home'); 
        }

        // Retourner une erreur si la connexion échoue
        return back()->withErrors([
            'email' => 'Identifiants incorrects'
        ]);
    }
public function form(){
    return view("connexion.inscription");
}
    public function logout()
    {
        JWTAuth::invalidate(JWTAuth::getToken());
        return response()->json(['message' => 'Déconnexion réussie']);
    }


    public function register(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        $token =JWTAuth::fromUser($user);
        return response()->json([
            'user' => $user,
            'token' => $token
        ]);

    }
    public function respondWithToken($token){
        return response()->json([
            'acces token'=>$token,
            'token_type'=>'bearer',
            'expires_in'=>auth()->factory()->getTTL()*60

        ]);
    }
}
