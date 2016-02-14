<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;

class RedirectIfAuthenticated
{
   
    protected $auth;


    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }


    public function handle($request, Closure $next)
    {
     /*
      Incercam un beforeMiddleware
        $response=$next($request);
         if ($response===true) {
            return redirect('/tasks');
        }
     
        return $response;
        */
        if($this->auth->check()){

            return redirect('/tasks');

        }

        return $next($request);
       
    }

}
