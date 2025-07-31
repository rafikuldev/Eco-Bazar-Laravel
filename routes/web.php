<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;


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

// Backend routes for banner management


