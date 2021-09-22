<?php
namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class FrontendAuthenticate extends Middleware
{
  
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            return route('guest.login');
        }
    }
}
