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
        $isPresident = 0;
        $user_id = Auth::user()->id;

        foreach($presidents as $presidentId)
        {
            if($user_id == $presidentId)
            {
                $isPresident = 1;
                break;
            }
        }

        if($isPresident == 0)
        {
            return back()->with(['alert-droits'=>'Vous n\'avez pas les droits !']);
        }

        return $next($request);
    }
}