<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;

class ProductsController extends Controller
{
    public function index()
    {
        return view('products.index');
    }
}
