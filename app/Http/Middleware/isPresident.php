<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class isPresident
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
        $presidents = array(1);
        $user_id = Auth::user()->id;

        if(in_array($user_id, $presidents)) {
            return $next($request);
        }

        return back()->with(['alert-droits'=>'Vous n\'avez pas les droits !']);
    }
}