<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;
class AdminRole
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


    if(Auth::user()->role == 2)
        {
    return redirect('StaffHome');
        }
    elseif (Auth::user()->role == 3)
        {
        return redirect('TeacherHome');
        }
        return $next($request);
    }
}
