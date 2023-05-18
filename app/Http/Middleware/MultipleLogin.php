<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MultipleLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    // public function handle(Request $request, Closure $next, $userRole)
    // {
    //     if (auth()->user()->role == $userRole) {
    //         return $next($request);
    //     }

    //     return response()->json(['You do not have permission to access for this page.']);
    //     /* return response()->view('errors.check-permission'); */
    // }

    public function handle($request, Closure $next, ...$roles)
    {
        if (!auth()->check()) {
            return redirect('home');
        }

        $userRoles = explode(';', $roles[0]);

        if (!in_array(auth()->user()->role, $userRoles)) {
            abort(403, 'Unauthorized action.');
        }

        return $next($request);
    }
}
