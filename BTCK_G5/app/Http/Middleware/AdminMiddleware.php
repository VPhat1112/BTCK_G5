<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {
            if (Auth::user()->role == '1') {
                return $next($request);
            } else {
                // Flash a message to the session
                Session::flash('error', 'Ban ko phai admin!');
                return redirect()->back();
            }
        } else {
            // Flash a message to the session
            Session::flash('error', 'Tao tai khoan de dang nhap!');
                return redirect()->back();
        }

        return $next($request);
    }
}
