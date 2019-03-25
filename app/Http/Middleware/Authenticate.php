<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string
     */
    protected function redirectTo($request, AuthenticationException $exception)
    {
        $guard = array_get($exception->guards(), 0);
 
        switch ($guard) {
            case 'admin':
                $login = 'admin.login';
                break;
            case 'customer':
                $login = 'customer.login';
                break;
            
            default:
                $login = 'login';
                break;
        }

        if (! $request->expectsJson()) {

            return route($login);
        
        }
    }
}
