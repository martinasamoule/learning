<?php

namespace App\Http\Middleware;
use App\Http\Middleware\Aute;
use Closure;
use Auth;
class AdminAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard =null )
    {
      if(!  Auth()->check())
      {
          return redirect(route('admin.login'));
      }
        return $next($request); //da el makan ally ana w2fa feh asln 
    }
}
