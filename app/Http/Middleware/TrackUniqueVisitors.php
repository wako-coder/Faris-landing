<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class TrackUniqueVisitors
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        
        $file = storage_path('app/visitors.json');

        if (!File::exists($file)) {
            File::put($file, json_encode([]));
        }

        $visitors = json_decode(File::get($file), true);
        $ip = $request->ip();

        if (!in_array($ip, $visitors)) {
            $visitors[] = $ip;
            File::put($file, json_encode($visitors));
        }

        // Share visitor count with all views
        view()->share('visitorCount', count($visitors));

        return $next($request);
    }
}
