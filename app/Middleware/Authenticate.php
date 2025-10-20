<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo($request): ?string
    {
        // ถ้าคำขอไม่ได้มาจาก API
        if (! $request->expectsJson()) {
            // เปลี่ยนจาก '/login' เป็น '/please-login'
            return route('please-login');
        }

        return null;
    }
}
