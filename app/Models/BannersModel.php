<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BannersModel extends Model
{
    protected $table = 'banners';

    protected $fillable = [
        'title', 'type', 'state', 'start', 'expire', 'content', 
        'file_desktop_url', 'file_mobile_url', 'position'
    ];
}
