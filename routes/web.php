<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ModuleController;


Route::get('/', [GalleryController::class, 'Home'])->name('home');
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');
Route::get('/about-us', [ModuleController::class, 'AboutUs'])->name('about-us');
