<?php

namespace App\Http\Middleware;

use App\Models\Franchise;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class TopFranchiseMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        $franchiseId = $request->route('id');

        if (!$franchiseId || !Franchise::find($franchiseId)) {
            throw new NotFoundHttpException('Franquicia inexistente');
        }

        return $next($request);
    }
}
