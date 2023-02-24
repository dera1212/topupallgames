<?php

use App\Http\Controllers\LandingpageController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\OrderController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [LandingpageController::class, 'index']);

Route::get('/layanan', [LayananController::class, 'index']);

Route::get('/order', [OrderController::class, 'index']);

Route::get('/order/mobile-legeds-diamond', [OrderController::class, 'mobilelegends']);

Route::get('/order/free-fire-diamond', [OrderController::class, 'freefire']);

Route::get('/order/pubg-uc', [OrderController::class, 'pubg']);

Route::get('/order/aov-voucher', [OrderController::class, 'aov']);

Route::get('/order/ragnarok-eternal-love-big-cat-coin', [OrderController::class, 'ragnarok']);

Route::get('/order/call-of-duty-mobile-cp', [OrderController::class, 'cod']);

Route::get('/order/steam-wallet-idr', [OrderController::class, 'steam']);

Route::get('/order/megaxus-mi-cash', [OrderController::class, 'megaxus']);

Route::get('/order/point-blank-zepetto', [OrderController::class, 'pb']);

Route::get('/order/hago-diamond', [OrderController::class, 'hago']);
