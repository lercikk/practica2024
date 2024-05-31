<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\NewsController;
use App\Models\News;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ContactController;

//Guest
Route::get('/', [GuestController::class, 'index'])->name('guest.index');
Route::get('/news/{news}', [GuestController::class, 'show'])->name('guest.show');

//Dashboard
Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::prefix('admin')->group(function () {
Route::resource('news', NewsController::class)->middleware('auth');
});

Route::get('/about', [GuestController::class, 'about'])->name('guest.about');
Route::get('/services', [GuestController::class, 'services'])->name('guest.services');
Route::get('/responsibilities', [GuestController::class, 'responsibilities'])->name('guest.responsibilities');
Route::get('/country', [GuestController::class, 'country'])->name('guest.country');
Route::get('/apply', [GuestController::class, 'apply'])->name('guest.apply');


Route::post('/contact-submit', [ContactController::class, 'submit'])->name('contact.submit');

Route::get('/career-counselling', function () {
    return view('career-counselling');
})->name('career-counselling');

Route::get('/university-admissions', function () {
    return view('university-admissions');
})->name('university-admissions');

Route::get('/visa-consultancy', function () {
    return view('visa-consultancy');
})->name('visa-consultancy');

Route::get('/accommodation', function () {
    return view('accommodation');
})->name('accommodation');

Route::get('/pre-departure-briefing', function () {
    return view('pre-departure-briefing');
})->name('pre-departure-briefing');

Route::get('/news/{news}/edit', [NewsController::class, 'edit'])->name('news.edit');
Route::put('/news/{news}/update', [NewsController::class, 'update'])->name('news.update');
Route::delete('/news/{news}', [NewsController::class, 'destroy'])->name('news.destroy');







