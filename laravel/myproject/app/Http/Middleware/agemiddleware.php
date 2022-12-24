<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class agemiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // dd("called");
        // dd($request->all());
        if ($request->quantity <= 0) {
            dd("invalid");
        }else{

            return $next($request);
        }
    }
}
