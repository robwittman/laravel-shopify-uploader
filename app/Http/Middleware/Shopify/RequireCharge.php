<?php

namespace App\Http\Middleware\Shopify;

use Illuminate\Http\Request;
use Closure;

class RequireCharge
{
    public function handle(Request $request, Closure $next)
    {
        // Check for shop
        if ($shop) {

        } else {
            $apiKey = config('shopify.api_key');
            $apiSecret = config('shopify.api_secret');
            $api = new Api($apiKey, $apiSecret);
        }
    }
}
