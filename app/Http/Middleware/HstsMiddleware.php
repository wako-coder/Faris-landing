<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class HstsMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);

        // Only apply if HTTPS is enabled
        if ($request->isSecure()) {
            $response->headers->set('Strict-Transport-Security', 'max-age=31536000; includeSubDomains; preload');
            $response->headers->set('X-Content-Type-Options', 'nosniff');
            $response->headers->set('X-Frame-Options', 'SAMEORIGIN');
            $response->headers->set('X-XSS-Protection', '1; mode=block');
            $response->headers->set('Referrer-Policy', 'no-referrer');
            $response->headers->set('Permissions-Policy', 'accelerometer=(), geolocation=(), microphone=()');
            $response->headers->set('Content-Security-Policy', "default-src 'self'; script-src 'self'; style-src 'self' 'unsafe-inline';");
        }

        return $response;
    }
}
