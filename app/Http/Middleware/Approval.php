<?php

namespace App\Http\Middleware;

use App\Models\User;
use app\Models\LibraryMember;
use App\Policies\ApprovalPolicy;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpKernel\Exception\HttpException;

class VerifyAdmins
{
    public function handle(Request $request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->LibrarianMember()->can(ApprovalPolicy::ADMIN, librarianMember::class , librarian::class)) {
            return $next($request);
        }

        throw new HttpException(403, 'Forbidden');
    }
}