<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\models\User;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\MyOrdersController;


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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
    })->name('dashboard');

Route::group(['middleware' => 'auth'], function() {
    Route::resource('products', ProductController::class);
    Route::resource('users', UsersController::class);
    Route::resource('checkout', CheckoutController::class);
    Route::resource('orders', OrderController::class);
    Route::resource('myorders', MyOrdersController::class);
    Route::post('approve/{id}/{status}', [
        'uses' => 'App\Http\Controllers\OrderController@updateStatus',
        'as' => 'order.updateStatus',
        ]);
    
    Route::post('add-to-cart/{id}', [
        'uses' => 'App\Http\Controllers\ProductController@addToCart',
        'as' => 'product.addToCart',
        ]);


    Route::post('clearCart', [
        'uses' => 'App\Http\Controllers\ProductController@destroyCart',
        'as' => 'clear.cart',
        ]);

    Route::post('purchase', [
        'uses' => 'App\Http\Controllers\CheckoutController@purchase',
        'as' => 'checkout.create',
        ]);
});




