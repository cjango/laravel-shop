<?php
use Illuminate\Support\Facades\Route;

Route::post('cart/{goods}', '\cjango\Shop\Cart\CartController@addTo');
Route::put('cart/{goods}', '\cjango\Shop\Cart\CartController@addTo');
