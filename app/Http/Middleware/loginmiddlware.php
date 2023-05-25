<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class loginmiddlware
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

        $username= $request -> input('admin');
        $password= $request -> input('password');
        return view('dashboard',compact('admin','password'));

        if($request->has('username') && ($request-> username == 'admin') &&
        $request->has('password') && ($request-> password == 'password')){
  

      
         
        }
        else{
            $message='invalid';
            return view('login',['message'=>$message]);
        }

   
        return $next($request);
        return redirect ()->route('welcome');
    }
}