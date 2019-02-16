<?php

namespace App\Http\Middleware;

use Closure;

class neil
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
        if($request->age <=200){
            return redirect('welcome');
        }
        return $next($request);
    }
}
