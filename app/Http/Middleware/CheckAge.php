<?php

namespace App\Http\Middleware;

use Closure;

class CheckAge
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
        if ($request->age < 18) {
//            return 'Доступ закрыт. Вам нет 18-ти';
            return redirect('not18');

        }
        return $next($request);
    }
}
