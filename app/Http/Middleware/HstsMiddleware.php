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
        }

        // Common security headers for all requests (HTTP or HTTPS)
        $response->headers->set('X-Content-Type-Options', 'nosniff');
        $response->headers->set('X-Frame-Options', 'SAMEORIGIN');
        $response->headers->set('Referrer-Policy', 'no-referrer');
        $response->headers->set('X-Download-Options', 'noopen');
        $response->headers->set('Permissions-Policy', 'accelerometer=(), geolocation=(), microphone=()');
        
        // Content Security Policy (CSP)
        $response->headers->set('Content-Security-Policy', "default-src 'self'; script-src 'self'; style-src 'self' 'unsafe-inline'; object-src 'none'; base-uri 'self'; frame-ancestors 'self';");

        // Cross-Origin policies (tightened for security)
        $response->headers->set('Cross-Origin-Embedder-Policy', 'require-corp');
        $response->headers->set('Cross-Origin-Opener-Policy', 'same-origin');
        $response->headers->set('Cross-Origin-Resource-Policy', 'same-origin');

        // XSS Protection header (optional, legacy)
        $response->headers->set('X-XSS-Protection', '1; mode=block');

        // Cross-domain policies for Adobe products
        $response->headers->set('X-Permitted-Cross-Domain-Policies', 'none');


        return $response;
    }
}
