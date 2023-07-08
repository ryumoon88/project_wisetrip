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
    return view('welcome');
});

Route::get('/main', function () {
    return view('layout.main');
});

Route::get('/login', function () {
    return view('Admin.register');
});

Route::get('/artikel', function () {
    return view('customer.artikel');
});
Route::get('/wilayah', function () {
    return view('customer.wilayah');
});