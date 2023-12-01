<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next,string $role)
    {

        if ($role == 'plan1' && auth()->user()->role_num != 1) {
            abort(403);
        }

        if ($role == 'plan2' && auth()->user()->role_num != 2) {
            abort(403);
        }

        if ($role == 'plan3' && auth()->user()->role_num != 3) {
            abort(403);
        }
        if ($role == 'plan4' && auth()->user()->role_num != 4) {
            abort(403);
        }
    

        return $next($request);
    }
}
