<?php

use App\Models\Item;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;


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
    return view('home');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/shop',[ItemController::class, 'index'] );

Route::get('/cart', function () {
    return view('cart', [
        'title' => 'My Cart']);
});

Route::get('/history', function () {
    return view('history', [
        'title' => 'My History']);
});

Route::get('/userprofile', function () {
    return view('userprofile', [
        'title' => 'User Profile']);
});

Route::get('/menu',[MenuController::class, 'index'] );

Route::get('/order', function () {
    return view('order', [
        'title' => 'Order']);
});

Route::get('/orderhistory', function () {
    return view('orderhistory', [
        'title' => 'Order History']);
});

Route::get('/login',[LoginController::class, 'index'] )->name('login')->middleware('guest');
Route::post('/login',[LoginController::class, 'authenticate'] );

Route::post('/logout',[LoginController::class, 'logout'] );

Route::get('/signup',[SignupController::class, 'index'] )->middleware('guest');
Route::post('/signup',[SignupController::class, 'store'] );