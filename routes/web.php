<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticleController;

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/category', [HomeController::class, 'category'])->name('category');
Route::get('/category/{id}', [HomeController::class, 'categoryDetail'])->name('category.detail');
Route::get('/writers', [HomeController::class, 'writers'])->name('writers');
Route::get('/writers/{id}', [HomeController::class, 'writerDetail'])->name('writer.detail');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/popular', [HomeController::class, 'popular'])->name('popular');
// Route baru untuk Data Science
Route::get('/articles/data-science', [ArticleController::class, 'dataScience'])->name('articles.dataScience');
Route::get('/articles/network-security', [App\Http\Controllers\ArticleController::class, 'networkSecurity'])->name('articles.networkSecurity');

