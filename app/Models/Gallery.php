<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
        protected $fillable = ['title', 'image', 'category_id', 'slug'];
    
    public function category()
    {
        return $this->belongsTo(GalleryCategory::class, 'category_id');
    }
}
