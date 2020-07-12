<?php

namespace App\Http\Middleware;
use App\Posts;
use Closure;
use Illuminate\Support\Facades\Auth;
class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        // to do: check neu khong co quyen
        // session storage -> get role
        $roles = Auth::user()->role;
        if (strpos($roles, '1') === false && strpos($roles, strval($role)) === false) {
            return redirect('admin');
        }
        return $next($request);
    }
}
