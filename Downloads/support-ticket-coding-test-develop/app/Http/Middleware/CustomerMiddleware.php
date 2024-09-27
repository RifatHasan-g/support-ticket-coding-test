<?php



namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::user() && Auth::user()->role === 'customer') {
            return $next($request);
        }

        return redirect()->route('tickets.index')->with('error', 'Only customers can create or modify tickets.');
    }
}
