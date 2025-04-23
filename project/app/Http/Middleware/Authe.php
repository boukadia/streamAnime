<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth ;
use Symfony\Component\HttpFoundation\Response;

class Authe
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        $user = Auth::user();
        if ($user) {
            return $next($request);
        }
        else{
            return redirect("/loginForm")->withErrors([
                'email' => 'Identifiants incorrects'
            ]);
        }
}
}
