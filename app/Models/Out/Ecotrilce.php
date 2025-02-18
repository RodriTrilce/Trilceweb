<?php

namespace App\Models\Out;

use Illuminate\Database\Eloquent\Model;

class Ecotrilce extends Model
{
    protected $table = 'lista';
    protected $fillable = ['name', 'email', 'dni', 'send2'];
}
