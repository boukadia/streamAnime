<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::check()) {
            return redirect('/registerForm'); // Redirection si l'utilisateur n'est pas connecté
        }

        $user = Auth::user(); // Récupération de l'utilisateur connecté

        if ($user->role === 'admin') {
            return redirect('/dashboard'); // Redirection pour les admins
        }
        

        return redirect('/'); // Redirection pour les utilisateurs classiques
    }
}
