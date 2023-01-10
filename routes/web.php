<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('template_folder.index');
});

Route::view('/about', 'template_folder.about');

Route::view('/404', 'template_folder.404');

Route::view('/cart', 'template_folder.cart');

Route::view('/checkout', 'template_folder.checkout');

Route::view('/contact', 'template_folder.contact');

Route::view('/news', 'template_folder.news');

Route::view('/single-news', 'template_folder.single-news');

Route::view('/shop', 'template_folder.shop');

Route::view('/single_product', 'template_folder.single-product');

Route::view('/index_2', 'template_folder.index_2');