<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UniversityModel extends Model
{
  protected $table = 'universities';


 /**
  * Validate University String exits
  *
  * @return String 
  */
  public static function validate($university)
  {
    $university = parent::where('short_name', $university)->first();
    
    if(!empty($university->name))
      return $university;
    else
      return false;
  }
  
}
