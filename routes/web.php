<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::get('/products', function () {
    $products = DB::table('products')->get();
    return view('products.index', ['products' => $products]);
});
