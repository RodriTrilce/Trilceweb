<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Storage;

class File extends Model
{
  protected $table = 'files';

  protected $fillable = [
    'token',
    'type',
    'mime',
    'extension',
    'location_folder',
    'location_driver',
    'name',
    'description',
    'size',
    'dimension',
    'trash'
  ];

  public function filesable()
  {
    return $this->morphTo();
  }

  public function fileUrl()
  {
    return rtrim(config('app.url'), '/') . Storage::url($this->location_folder . '/' . $this->token . '.' . $this->extension);
  }

  public function realFileUrl()
  {
    $url = Storage::url($this->location_folder . '/' . $this->token );

    if($this->filesable_type == 'App\Models\GalleryBlogModel')
    {
      $url .= '_' . $this->dimension;
    }

    return $url . '.' . $this->extension;
  }

  public function blogImage($thumb = false)
  {
    if($thumb){
      return Storage::url($this->location_folder . '/' . $this->token . '_290x290.' . $this->extension);
    }else{
      return Storage::url($this->location_folder . '/' . $this->token . '_' . $this->dimension . '.' . $this->extension);
    }
  }

  public function downloadUrl()
  {
    return substr($this->fileUrl(), 1);    
  }

  public function nameSlugExtension()
  {
    return str_slug($this->name, '-') . '.' . $this->extension;
  }

}
