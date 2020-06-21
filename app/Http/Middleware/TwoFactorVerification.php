<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Twilio;

class TwoFactorVerification
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
        $user = auth()->user();
        if ($user->two_factor_expiry > \Carbon\Carbon::now()) {
            return $next($request);
        }
        $user->two_factor_token = str_random(10);
        $user->save();
        \Mail::to($user)->send(new TwoFactorAuthMail($user->two_factor_token));
        return redirect('/two_factor');
    }
}

