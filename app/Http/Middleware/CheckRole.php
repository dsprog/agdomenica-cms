<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, string $role)
    {
        $vRoleID = (int) auth()->user()->role_id;
        if ($role === 'admin' && $vRoleID !== 1) {
            abort(403, 'Acesso negado');
        }elseif ($role === 'studient' && $vRoleID !== 2) {
            abort(403, 'Acesso negado');
        }elseif ($role === 'teacher' && $vRoleID !== 3) {
            abort(403, 'Acesso negado');
        }
        return $next($request);
    }
}
