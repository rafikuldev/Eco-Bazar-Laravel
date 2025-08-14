<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\Backend\BannerController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\FacilityController;


Route::controller(FrontendController::class)->name('frontend.')->group(function () {
  Route::get('/', 'index')->name('index');
  Route::get('/about', 'about')->name('about');
  Route::get('/product/{slug}', 'showProduct')->name('product.show');
  Route::get('/contact-us', 'contact')->name('contact');
  Route::get('/shop/{slug?}', 'categoryArchive')->name('shop');
  Route::post('/review-submit', 'reviewSubmit')->name('review.submit');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Backend routes for category management
Route::prefix('backend/category')->name('backend.category.')->group(function () {
    Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [CategoryController::class, 'update'])->name('update');
});


Route::prefix('backend/facility')->name('backend.facility.')->group(function () {
    Route::get('/', [FacilityController::class, 'index'])->name('index');
    Route::get('/create', [FacilityController::class, 'create'])->name('create');
    Route::post('/store', [FacilityController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [FacilityController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [FacilityController::class, 'update'])->name('update');
    Route::delete('/destroy/{id}', [FacilityController::class, 'destroy'])->name('destroy');
    Route::get('/status-update/{id}', [FacilityController::class, 'statusUpdate'])->name('status.update');
});

Route::prefix('backend/product')->name('backend.product.')->group(function () {
    Route::get('/toggle-status/{id}', [ProductController::class, 'toggleStatus'])->name('toggle.status');
    Route::get('/toggle-featured/{id}', [ProductController::class, 'toggleFeatured'])->name('toggle.featured');
    Route::get('/toggle-stock/{id}', [ProductController::class, 'toggleStock'])->name('toggle.stock');
    // edit and delete routes
    Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [ProductController::class, 'update'])->name('update');
    Route::delete('/destroy/{id}', [ProductController::class, 'destroy'])->name('destroy');
});
