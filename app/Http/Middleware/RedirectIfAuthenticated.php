<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        /**
         * Vi du nhu o day. neu da dang nhap roi thi no se redirect to home.
         * cai nay kho hon may cai kia 1 chut, ong nen xem video de hieu ro hon.
         * cai day do ong set ma
         * set trong blade hoac controller. tuy ong de dau.
         * toi van chua hieu tai sao lai lien quan toi app.blade??
         */
        if (Auth::guard($guard)->check()) {
            return redirect('/home');
        }

        return $next($request);
    }
}
