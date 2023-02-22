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
