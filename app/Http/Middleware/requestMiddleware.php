<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class requestMiddleware
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

      $Amount = $request->input('transfer');


     //  $Customerpayload=[
     //
     //   'Amount' =>$Amount
     // ];

      //return $Customerpayload;
      return $next($request);
    }
}
