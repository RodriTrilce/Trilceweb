<?php

namespace App\Models\Academia;

use Illuminate\Database\Eloquent\Model;

class EnrollmentModel extends Model
{
  protected $table = 'academia_enrollment';
  protected $primaryKey = 'student_dni';
}
