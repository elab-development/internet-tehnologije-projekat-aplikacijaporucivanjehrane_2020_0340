<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ProveraRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        if($request->user('sanctum') && in_array($request->user('sanctum')->role, $roles)){
            return $next($request);
        }


        return response()->json(['error' => 'Nije autorizovano'], 401);
    }
}
