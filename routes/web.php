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

Route::get('/', [\App\Http\Controllers\HomepageController::class, 'home']);
Route::get('/login', [\App\Http\Controllers\HomepageController::class, 'login'])->name('login');
Route::get('/logout', [\App\Http\Controllers\HomepageController::class, 'logout']);
Route::post('/login', [\App\Http\Controllers\HomepageController::class, 'post_login']);

Route::get('/test', function(){
    dd(\Illuminate\Support\Facades\Hash::make("psacard98"));
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [\App\Http\Controllers\DashboardController::class, 'dashboard']);
    Route::get('/submit/data', [\App\Http\Controllers\DashboardController::class, 'submit_data']);
    Route::post('/submit/data', [\App\Http\Controllers\DashboardController::class, 'post_submit_data']);


});


