<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $banners = \App\Models\Banner::where('is_active', true)
        ->orderBy('order')
        ->get();
    return view('home', compact('banners'));
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/products', function () {
    return view('products');
})->name('products');

Route::get('/blogs', function () {
    return view('blogs');
})->name('blogs');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/portfolios', function () {
    return view('portfolios');
})->name('portfolios');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Admin Routes
Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('banners', \App\Http\Controllers\Admin\BannerController::class);
});

