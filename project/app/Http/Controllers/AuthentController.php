<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Request as FacadesRequest;


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
        else {
            return back()->withErrors([
                'email' => 'Identifiants incorrects'
            ]);
           
        }

        // Retourner une erreur si la connexion échoue
    }
public function form(){
    return view("connexion.inscription");
}
    public function logout()
    {
        
       
    }


    public function register(Request $request){
        // $request->validate([
        //     'name' => 'required|string|max:255',
        //     'email' => 'required|string|email|max:255|unique:users',
        //     'password' => 'required|string|min:',
        // ]);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
    //    dd($user);

    }
   
}
