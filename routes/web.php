<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\ServicesController;
use App\Http\Controllers\SiteController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::group(['prefix' => LaravelLocalization::setLocale()], function () {
    // Authentication
    Auth::routes();
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    // Admin Panel
    Route::prefix('admin')->name('admin.')->middleware('auth', 'check_user')->group(function () {
        Route::get('/', [AdminController::class, 'index'])->name('index');
        Route::resource('categories', CategoryController::class);
        Route::resource('services', ServicesController::class);
        Route::resource('newses', NewsController::class);
    });


    // website
    Route::get('/', [SiteController::class, 'index'])->name('site.index');
    Route::get('/category/{id}', [SiteController::class, 'category'])->name('site.category');
});
