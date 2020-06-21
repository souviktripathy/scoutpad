<?php
namespace App\Http\Middleware;

use Closure;
use Session;

class IsUserAdminMiddleware
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
    if (Session::has('scoutpad_frontend_user_id') && Session::has('scoutpad_frontend_user_verified')){
			return $next($request);
		}
    
		return redirect()->route('login-page');
  }
}