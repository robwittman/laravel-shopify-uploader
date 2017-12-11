<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Shopify\Api;
use Shopify\Service\ShopService;
use App\Shop;
use App\SessionHandler;

class Shopify extends Controller
{
    protected $api;

    public function __construct()
    {
        $this->api = new Api(array(
            'api_key' => config('shopify.api_key'),
            'api_secret' => config('shopify.api_secret')
        ));
        $this->api->setStorageInterface(new SessionHandler());
    }

    public function install(Request $request)
    {
        $domain = $request->myshopify_domain;
        if (!$domain) {
            return view('install');
        }
        $this->api->setMyshopifyDomain($domain);
        return redirect($this->getRedirectUri());
    }

    public function auth(Request $request)
    {
        if (!$request->shop) {
            return view('install');
        }
        $this->api->setMyshopifyDomain($request->shop);
        if ($request->code) {
            $this->installShop($request->code);
            return redirect("https://{$request->shop}/admin/apps/{$this->api->getApiKey()}");
        } else {
            return redirect($this->getRedirectUri());
        }
    }

    public function render(Request $request)
    {
        $shop = $request->shop;
        if (!$shop) {
            return view('install');
        }
        return view('app');
    }

    protected function getRedirectUri()
    {
        $scopes = config('shopify.scopes');
        $redirectUri = url(config('shopify.redirect_uri'));
        $helper = $this->api->getOAuthHelper();
        return $helper->getAuthorizationUrl($redirectUri, $scopes);
    }

    protected function installShop($code)
    {
        $helper = $this->api->getOAuthHelper();
        $token = $helper->getAccessToken($code);
        $this->api->setAccessToken($token->access_token);
        $service = new ShopService($this->api);
        $shopData = $service->get();
        $shop = Shop::firstOrCreate(array('id' => $shopData->id));
        foreach ($shopData->exportData() as $key => $value) {
            $shop->{$key} = $value;
        }
        $shop->access_token = $token->access_token;
        $shop->scopes = $token->scopes;
        $shop->save();
    }
}
