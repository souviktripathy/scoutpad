<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Routing\Route;

class LoginFilterMiddleware
{
    protected $route;

    public function __construct(Route $route){
      $this->route = $route;
    }
    
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
     
      
      
      return $next($request);
    }
}