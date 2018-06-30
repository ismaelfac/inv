<?php

namespace App\Http\Middleware;

use Closure;

class Admin
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
        switch (auth()->user()) 
        {
            case 'is_admin':
                return response()->view('admin.content');
                break;
            default:
                return redirect('/'); 
        }
        // if(! auth()->user()->is_admin){
        //     return redirect('/');
        // }else{
        //     return response()->view('admin.content');
        // }
        return $next($request);
    }
}
