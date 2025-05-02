<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Session;

class TrackUserActivity
{
    public function handle($request, Closure $next)
    {
        $sessionId = Session::getId();
        $expiresAt = now()->addMinutes(2);

        // Enregistre le timestamp de l'activité
        $users = Cache::get('online-users', []);
        $users[$sessionId] = now()->timestamp;

        // Nettoie les sessions inactives (plus de 2 min)
        $users = array_filter($users, function ($lastSeen) {
            return (now()->timestamp - $lastSeen) <= 120;
        });

        Cache::put('online-users', $users, $expiresAt);

        return $next($request);
    }
}
