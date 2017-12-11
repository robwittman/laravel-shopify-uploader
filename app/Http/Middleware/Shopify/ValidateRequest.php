<?php

namespace App\Http\Middleware\Shopify;

use Illuminate\Http\Request;
use Closure;

class ValidateRequest
{
    public function handle(Request $request, Closure $next)
    {
        return $next($request);
    }
}
