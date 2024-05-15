<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\NewsController;
use App\Models\News;
use Illuminate\Support\Facades\Auth;
//Guest
Route::get('/', [GuestController::class, 'index'])->name('guest.index');

//Dashboard
Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::prefix('admin')->group(function () {
Route::resource('news', NewsController::class)->middleware('auth');
});

 

Route::get('/news/{news}/edit', [NewsController::class, 'edit'])->name('news.edit');
Route::put('/news/{news}/update', [NewsController::class, 'update'])->name('news.update');
Route::delete('/news/{news}', [NewsController::class, 'destroy'])->name('news.destroy');
