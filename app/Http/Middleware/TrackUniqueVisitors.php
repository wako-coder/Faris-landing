<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Cache;

class TrackUniqueVisitors
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $ip = $request->ip();
        
        // Get the current list of IPs from the cache, or default to empty array
        $visitors = Cache::get('unique_visitors', []);

        // If IP not already tracked, add it
        if (!in_array($ip, $visitors)) {
            $visitors[] = $ip;

            // Store updated list back in cache
            Cache::forever('unique_visitors', $visitors);
        }

        // Share the count with all views
        view()->share('visitorCount', count($visitors));

        return $next($request);
    }
}
