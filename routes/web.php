<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CityController;

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
// Route::get('/', function () {
//     return view('index');
// });

Route::resource('/',IndexController::class);

Route::get('/login',[LoginController::class,'login'])->name('login')->middleware('guest');
Route::post('/login',[LoginController::class,'authenticate']);
Route::post('/logout',[LoginController::class,'logout']);
Route::post('/register',[LoginController::class,'registerStore']);
// Route::get('/login', function () {
//     return view('register.login');
// });

//Article
Route::resource('article', ArticleController::class);

Route::resource('destination', DestinationController::class);

Route::resource('order', OrderController::class);

Route::resource('city', CityController::class);
Route::get('/search-city',[CityController::class,'search']);

Route::get('/contact', function () {
    return view('customer.Contact.contact');
});

Route::get('/contact', function () {
    return view('customer.Contact.contact');
});

Route::get('/pesanan', function () {
    return view('customer.Pesanan.pesanan');
});

Route::get('/pembayaran', function () {
    return view('customer.Pesanan.pembayaran');
});
