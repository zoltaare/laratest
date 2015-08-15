<?php namespace App\Http\Middleware;

use Closure;

class RedirectIfNotFooer {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		if( ! $request->user()->IsFooer() ){
			return redirect('/'); //is not Fooer
		} 
		return $next($request);
	}

}
