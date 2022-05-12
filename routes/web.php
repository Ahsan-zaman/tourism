<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PackageController;
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

Route::get('/', [DashboardController::class, 'home'])->name('home');

Route::middleware(['auth'])->group(function(){
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::delete('/users/{user}', [DashboardController::class, 'block'])->name('users.block');
    Route::post('/users/{user}', [DashboardController::class, 'unblock'])->name('users.unblock')->withTrashed();

    Route::post('/categories/{category}/restore', [CategoryController::class, 'restore'])->name('categories.restore')->withTrashed();
    Route::resource('categories', CategoryController::class);

    Route::post('/packages/{package}/restore', [PackageController::class, 'restore'])->name('packages.restore')->withTrashed();
    Route::resource('packages', PackageController::class)->except('show');
    Route::get('packages/{package:slug}', [PackageController::class, 'show'])->name('packages.show');
});

require __DIR__.'/auth.php';
