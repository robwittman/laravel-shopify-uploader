<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {

});

Route::group(['prefix' => 'app'], function() {
    Route::get('', 'Shopify@render')->middleware('shopify.auth');
    Route::group(['namespace' => 'App'], function() {
        Route::get('/products', 'ProductsController@index');
    });
});

Route::group(['prefix' => 'shopify'], function() {
    Route::match(['get', 'post'], '/install', 'Shopify@install');
    Route::match(['get', 'post'], '/auth', 'Shopify@auth');
});

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function() {
    Auth::routes();
    Route::group(['middleware' => 'auth'], function() {
        Route::get('/shops', 'ShopsController@index');
        Route::resource('/users', 'UsersController');
    });
});
