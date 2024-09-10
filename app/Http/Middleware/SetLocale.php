<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        // if (session()->has('locale')) {
        //     app()->setLocale(session()->get('locale'));
        // }

        // dd(session()->get('locale'));
        // $locale = $request->cookie('locale') ?? session()->get('locale') ?? config('app.locale');
        $locale = session()->get('locale') ?? config('app.locale');

        session()->put('locale', $locale);

        app()->setLocale($locale);

        return $next($request);
    }
}
