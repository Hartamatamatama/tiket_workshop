<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    protected function redirectTo($request)
    {
        // dd('Middleware CheckRole dijalankan', $request);
        if (!$request->expectsJson()) {
            return route('login');
        }
    }
}