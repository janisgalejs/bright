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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'home'])->name('home');

Route::group(['middleware' => 'auth'], function () {

    Route::resource('activity', \App\Http\Controllers\Admin\ActivityController::class)
        ->except('show');

    Route::get('dashboard', [\App\Http\Controllers\HomeController::class, 'dashboard'])
        ->name('dashboard');

});

require __DIR__.'/auth.php';
