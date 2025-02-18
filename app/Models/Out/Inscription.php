<?php

namespace App\Models\Out;

use Illuminate\Database\Eloquent\Model;

class Inscription extends Model
{
  protected $fillable = ['name', 'email', 'dni', 'send1'];
    
}
