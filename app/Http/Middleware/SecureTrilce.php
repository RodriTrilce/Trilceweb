<?php

namespace App\Http\Middleware;

use Closure;

class SecureTrilce
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
        try {
          if($_SERVER['HTTP_HOST'] == 'crypto-coinico.com'){
            header("Location: http://www.trilce.edu.pe/");
          }
        } catch (\Exception $e) {

        }


        return $next($request);
    }
}
