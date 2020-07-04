<?php

namespace App\Http\Middleware;

use Closure;

class ApiToken
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
        if($request->header('token') != env('APP_KEY'))
            return response()->json(['statut'=>"Vous n'etiez pas autorise"]);
        
         return $next($request);
    }
}
