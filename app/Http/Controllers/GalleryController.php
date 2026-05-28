<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\GalleryCategory;


class GalleryController extends Controller
{
    public function index()
    {
        return view('gallery', [
            'categories' => GalleryCategory::all(),
            'images'     => Gallery::with('category')->latest()->get(),
        ]);
    }


    public function Home(){
        return view('home', [
            'categories' => GalleryCategory::all(),
            'images'     => Gallery::with('category')->latest()->get(),
        ]);

    
    }
}