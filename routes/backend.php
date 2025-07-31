<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\BannerController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\DashboardController;



Auth::routes();


Route::prefix('backend/')->name('backend.')->middleware('auth')->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');


    // Category Routes
    Route::controller(CategoryController::class)->name('category.')->prefix('category')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/status-update/{id}', 'statusUpdate')->name('update.status');
    });
    Route::controller(BannerController::class)->name('banner.')->prefix('banner')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');

        // Edit এবং Update এর জন্য রুট
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::put('/update/{id}', 'update')->name('update');

        // Delete এর জন্য সঠিক রুট
        Route::delete('/destroy/{id}', 'destroy')->name('destroy');

        // Status Update এর জন্য রুট
        Route::get('/status-update/{id}', 'statusUpdate')->name('status.update');
    });
});
