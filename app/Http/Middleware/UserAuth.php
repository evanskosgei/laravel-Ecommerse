<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UserAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next){//

        //if(!session()->has('user') && ($request->path() !=('/login') && $request->path() !='/dashboard')){
        //    return redirect('/login')->with('fail','you must be logged in');
        //}
        //if(session()->has('user') && ($request->path()== '/login' || $request->path()=='/dashboard')){
        //    return back();
        //}
        //if(! $request->expectsJson()){
        //   return ('/login');
        //}
        return $next($request)->header('Cache-Control','no-cache, no-store, max-age=0, must-revalidate')
                                ->header('pragma','no-cache')
                                ->header('Expires', 'sat jan 1990 00::00 GMT');
    }
}
