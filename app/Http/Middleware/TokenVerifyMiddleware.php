<?php

namespace App\Http\Middleware;

use Closure;

class TokenVerifyMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $auth = $request->header('Authorization');
        if(!$auth) {
           return response()->json(['code' => 403, 'message' => 'Permiso denegado'], 403);
        }
        return $next($request);
    }
}
