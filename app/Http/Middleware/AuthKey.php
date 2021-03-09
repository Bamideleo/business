<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthKey
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // will set a token 
        // please copy this APP_kEY to your postman header ABCEFGHIJK

        $token = $request->header('APP_KEY');
        if($token != 'ABCEFGHIJK'){
            return response()->json(['message'=>'App key not found'],401);
        }
        return $next($request);
    }
}
