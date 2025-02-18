<?php

namespace App\Models\Colegio;

use Illuminate\Database\Eloquent\Model;

class VenueModel extends Model
{
  protected $table = 'colegio_venue';
  
  public function address()
  {
    return $this->hasMany(VenueAddressModel::class, 'idvenue');
  }
  
  public function investment()
  {
    return $this->hasMany(VenueInvestmentModel::class, 'idvenue');
  }
  
  
}
