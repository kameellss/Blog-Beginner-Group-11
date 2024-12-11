<?php
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\StaticPageController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\CategoryController; // Tambahkan
use App\Http\Controllers\TagController; // Tambahkan

Route::get('/', [ArticleController::class, 'index'])->name('homepage');
Route::get('/article/{id}', [ArticleController::class, 'show'])->name('detailarticle');
Route::get('/about', [StaticPageController::class, 'about'])->name('about');

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::resource('categories', CategoryController::class);
    Route::resource('tags', TagController::class);
    Route::resource('articles', ArticleController::class);
});


Route::get('/', [HomepageController::class, 'index']);
Route::get('/article/{title}', [ArticleController::class, 'show']);
