<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class GalleryCategory extends Model
{
    protected $fillable = ['name', 'slug'];

    protected static function booted(): void
    {
        // category images creation
        static::created(function (GalleryCategory $category) {
            Storage::disk('public')->makeDirectory('galleries/' . $category->slug);
        });

        // will update the category folder if the name changed on the system
        static::updated(function (GalleryCategory $category) {
            if ($category->isDirty('slug')) {
                $old = 'galleries/' . $category->getOriginal('slug');
                $new = 'galleries/' . $category->slug;

                if (Storage::disk('public')->exists($old)) {
                    Storage::disk('public')->move($old, $new);
                }
            }
        });

        // delete the folder if category is deleted
        static::deleted(function (GalleryCategory $category) {
            Storage::disk('public')->deleteDirectory('galleries/' . $category->slug);
        });
    }
}