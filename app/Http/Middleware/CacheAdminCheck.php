<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class CacheAdminCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (Cache::has('loggedInUserId')) {
            $loggedInUserId = Cache::get('loggedInUserId');
            $user = User::find($loggedInUserId);
            $role = $user->role;

            if($role=="admin"){
                return $next($request);
            }


        }

        return redirect('/login');
    }
}
