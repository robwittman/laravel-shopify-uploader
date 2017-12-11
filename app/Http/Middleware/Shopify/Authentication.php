<?php

namespace App\Http\Middleware\Shopify;

use Illuminate\Http\Request;
use Closure;
use App\Shop;
use Shopify\Api;

class Authentication
{
    public function handle(Request $request, Closure $next)
    {
        $domain = $request->shop;
        if (!$domain) {
            return response(view('install'));
        }

        $shop = Shop::where('myshopify_domain', 'LIKE', $request->shop)->first();
        if ($shop) {
            $this->setSession($domain);
            return $next($request);
        }
        return $response(redirect(config('shopify.redirect_uri')));
    }

    public function setSession($domain)
    {
        session('domain', $domain);
        session('created', time());
    }
}
