<?php

namespace App\Http\Middleware;
use Auth;

use Closure;

class AdminLogin
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
        if(Auth::check()){
            $user = Auth::user();
            if($user->role == 1){
                return $next($request);
            }
            else{
                return redirect('admin/login')->with('notification','Bạn không có quyền đăng nhập vào admin');
            }
            
        }
        else{
            return redirect('admin/login');
        }
        
    }
}
