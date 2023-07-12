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
    return view('index');
});
Route::get('/login', function () {
    return view('register.login');
});
Route::get('/destinasi', function () {
    return view('customer.Destinasi.destinasi');
});
Route::get('/detaildestinasi', function () {
    return view('customer.Destinasi.detaildestinasi');
});
Route::get('/artikel', function () {
    return view('customer.Artikel.artikel');
});
Route::get('/nextartikel', function () {
    return view('customer.Artikel.nextartikel');
});
Route::get('/contact', function () {
    return view('customer.Contact.contact');
});
Route::get('/wilayah', function () {
    return view('customer.Wilayah.wilayah');
});
Route::get('/detailwilayah', function () {
    return view('customer.Wilayah.detailwilayah');
});