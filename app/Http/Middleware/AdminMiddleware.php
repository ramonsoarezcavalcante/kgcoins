<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Temporariamente, vamos considerar qualquer usuário autenticado como admin
        // Em produção, você pode usar um campo 'role' ou 'is_admin' no modelo User
        if (!auth()->check()) {
            abort(401, 'Unauthorized');
        }

        // Você pode expandir isso com verificação de papel/role
        // if (!auth()->user()->isAdmin()) {
        //     abort(403, 'Forbidden');
        // }

        return $next($request);
    }
}
