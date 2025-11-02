<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.app');
});


Route::get('/product', function () {
    return view('home.product');
})->name('product');
