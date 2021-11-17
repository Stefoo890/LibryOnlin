<?php

namespace App\Http\Middleware;

use App\Models\Administrator;
use App\Policies\ApprovalPolicy;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpKernel\Exception\HttpException;

class Library
{
    public function handle(Request $request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->administrator()->can(administratorPolicy::administrator, administrator::class)) {
            return $next($request);
        }

        throw new HttpException(403, 'Forbidden');
    }
}
