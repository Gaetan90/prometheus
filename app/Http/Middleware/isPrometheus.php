<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class isPrometheus
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
        $members = array(1);
        $user_id = Auth::user()->id;

        if(in_array($user_id, $members)) {
            return $next($request);
        }

        return redirect('users/dictionary')->with(['alert-droits'=>'Vous n\'avez pas les droits !']);    
    }
}
