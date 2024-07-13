<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User;

class ShareUserData
{
    public function handle($request, Closure $next)
    {
        // Mengambil data user yang sedang login
        $user = User::first();

        // Membuat variabel global untuk digunakan di semua view
        view()->share('user', $user);

        return $next($request);
    }
}
