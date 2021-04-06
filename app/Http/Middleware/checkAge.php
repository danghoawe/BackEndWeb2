<?php

namespace App\Http\Middleware;

use Closure;

class checkAge
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
        if ($request->username == "admin" && $request->pass =="abc") {
            return $next($request);
        }
        return redirect("index.php");
        abort(403);
    }
}
