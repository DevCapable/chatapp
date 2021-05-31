<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
class UserIsOnline
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
        if (Auth::check()){
            $expireTime = Carbon::now()->addMinute(1);
            Cache::put('is_online'. Auth::user()->id, true, $expireTime);
            User::where('id', Auth::user()->id)->update(['last-seen'=>Carbon::now()]);
        }
        return $next($request);
    }
}
