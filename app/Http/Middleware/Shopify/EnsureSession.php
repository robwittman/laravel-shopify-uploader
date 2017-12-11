<?php

namespace App\Http\Middleware\Shopify;

use Illuminate\Http\Request;
use Closure;

class EnsureSession
{
    public function handle(Request $request, Closure $next)
    {
        $domain = session('shop_domain');
        $created = session('created');
        if (!$domain || !$created || $created < time()) {
            return redirect('/app');
        }
        return $next($request);
    }
}
