<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\Backend\FacilityController;


Route::controller(FrontendController::class)->name('frontend.')->group(function () {
  Route::get('/', 'index')->name('index');
  Route::get('/about', 'about')->name('about');
  Route::get('/product', 'product')->name('product');
  Route::get('/shop', 'shop')->name('shop');
  Route::get('/contact-us', 'contact')->name('contact');
  Route::get('/category/{slug}', 'categoryArchive')->name('category.archive');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// routes/web.php

use App\Http\Controllers\Backend\BannerController;
use App\Http\Controllers\Backend\CategoryController; // Controller import kore nin

// Backend routes for category management
Route::prefix('backend/category')->name('backend.category.')->group(function () {
    // Edit a category (shows the form)
    Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('edit');

    // Update a category (handles the form submission)
    Route::put('/update/{id}', [CategoryController::class, 'update'])->name('update');
});

// routes/web.php

// routes/web.php


Route::prefix('backend/facility')->name('backend.facility.')->group(function () {
    Route::get('/', [FacilityController::class, 'index'])->name('index');
    Route::get('/create', [FacilityController::class, 'create'])->name('create');
    Route::post('/store', [FacilityController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [FacilityController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [FacilityController::class, 'update'])->name('update');
    Route::delete('/destroy/{id}', [FacilityController::class, 'destroy'])->name('destroy');
    Route::get('/status-update/{id}', [FacilityController::class, 'statusUpdate'])->name('status.update');
});

