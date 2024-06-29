<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckResetFormSubmitted
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next)
    {
        if (!$request->session()->has('reset_form_submitted')) {
            return redirect()->route('adminpage'); // Redirect to admin reset page if form not submitted
        }

        return $next($request);
    }
}
