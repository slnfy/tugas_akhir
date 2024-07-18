<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PenyimpananController;
use App\Http\Middleware\AuthMiddleware;

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
    return redirect('/login');
});


Route::get('/login', [UserController::class, 'login'])->name('user.login');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
Route::group([AuthMiddleware::class], function () {
    Route::resources(['user' => UserController::class]);
    Route::resources(['penyimpanan' => PenyimpananController::class]);
});
