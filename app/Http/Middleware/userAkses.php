<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class userAkses
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        $user = auth()->user();

        // Check if the user is logged in and has an 'Aktif' status
        if ($user && $user->status == 'Aktif') {
            // Check if the user's role is in the list of allowed roles
            if (in_array($user->role, $roles)) {
                return $next($request);
            } else {
                // User has the wrong role
                return redirect('profil')->with('errors', 'Anda tidak diizinkan');;
            }
        } else {
            // User is not logged in or has an 'non-aktif' status
            return redirect('profil')->with('errors', 'Anda sedang cuti dan tidak diizinkan untuk melakukan perubahan');
        }
    }
}
