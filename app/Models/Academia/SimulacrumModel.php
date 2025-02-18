<?php

namespace App\Models\Academia;

use Illuminate\Database\Eloquent\Model;

class SimulacrumModel extends Model
{
  protected $table = 'academia_simulacrum';

  protected $fillable = [
    'name',
    'url',
    'created_at',
    'university_id'
  ];
}
