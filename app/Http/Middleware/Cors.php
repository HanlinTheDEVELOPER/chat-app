<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Cors
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    // public function handle($request, Closure $next): Response
    // {
    // $response = $next($request);
    // $IlluminateResponse = 'Illuminate\Http\Response';
    // $SymfonyResopnse = 'Symfony\Component\HttpFoundation\Response';
    // $headers = [
    //     'Access-Control-Allow-Origin' => '*',
    //     'Access-Control-Allow-Methods' => 'POST, GET, OPTIONS, PUT, PATCH, DELETE',
    //     'Access-Control-Allow-Headers' => 'Content - Type,
    //          Authorization,
    //          X - Requested - With,
    //          X - XSRF - TOKEN',
    // ];

    // if ($response instanceof $IlluminateResponse) {
    //     foreach ($headers as $key => $value) {
    //         $response->header($key, $value);
    //     }
    //     return $response;
    // }

    // if ($response instanceof $SymfonyResopnse) {
    //     foreach ($headers as $key => $value) {
    //         $response->headers->set($key, $value);
    //     }
    //     return $response;
    // }

    // return $response;

    // }
    public function handle($request, Closure $next)
    {
        return $next($request)
            ->header('Access - Control - Allow - Origin', ' * ');
    }
}
