<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GalleryBlogModel extends Model
{
    protected $table    = 'gallery_blog';
    protected $fillable = ['post_id'];

    public function images()
    {
      return $this->morphMany('App\Models\File', 'filesable');
    }
}
