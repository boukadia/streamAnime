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
       
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        
        
       
        if (Auth::attempt($request->only('email', 'password')) ) {
            return redirect("/home"); 
        }
        else {
            return back()->withErrors([
                'email' => 'Identifiants incorrects'
            ]);
           
        }
    

        
    }
public function loginForm(){
    return view("connexion.login");
}
public function registerForm(){
    return view("connexion.register");
}
    public function logOut()
    {
        Auth::logout();
        return redirect("/registerForm");
       
    }


    public function register(Request $request){
        
        
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:2',
        ]);
       
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return redirect('/loginForm');
    

    }



   
}
