<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/gallery', function () {
    return view('gallery', [
        'categories' => GalleryCategory::withCount('galleries')->get(),
        'images'     => Gallery::with('category')->latest()->get(),
    ]);
})->name('gallery');
