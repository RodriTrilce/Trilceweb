<?php
namespace App\Models\Academia;

use Illuminate\Database\Eloquent\Model;
use Storage;

class MathOlympicsModel extends Model
{
  protected $table = 'academia_math_olympics';
  protected $fillable = [
    'type',
    'venue',
    'title',
    'grade',
    'base_url',
    'inscription_url',
    'inscription_group_url',
    'finish_at'
  ];

  public function results()
  {
    return $this->morphMany('App\Models\File', 'filesable');
  }

  public function baseRules()
  {
    return $this->hasOne('\App\Models\File', 'id', 'file_id');
  }

  public function getBaseRules()
  {
    $result = $this->baseRules;
    
    if($result){
      return Storage::url($result->location_folder . '/' . $result->token . '.' . $result->extension);
    }else{
      return false;
    }
  }

}
