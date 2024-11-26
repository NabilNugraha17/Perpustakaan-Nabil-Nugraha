<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): \Symfony\Component\HttpFoundation\Response  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $allow = array_slice(func_get_args(), 2); // Check allowed roles
        
        if (\Auth::user()) { // If user is logged in
            $ada = \Auth::user()->hasRole()->value('role');
            if ($ada) {
                $role = $ada;
            } else {
                $role = 'user';
            }

            foreach ($allow as $allow) { // Check if role is allowed
                if ($role == $allow) {
                    return $next($request);
                }
            }
            return redirect('/dashboard'); // Redirect if not allowed
        } else {
            return redirect('.'); // Redirect to homepage if not logged in
        }
    }
}
