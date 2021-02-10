<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Carbon\Carbon;

class DayOfWeek
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
        if(Carbon::now()->dayOfWeek == 6 || Carbon::now()->dayOfWeek == 7){
            return redirect('home');
        }
        return $next($request);
    }
}
