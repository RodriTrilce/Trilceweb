<?php

namespace App\Models\Academia;

use Illuminate\Database\Eloquent\Model;

class VenueModel extends Model
{
	protected $table = 'academia_venue';

	protected $fillable = [
		'name',
		'horary',
		'content',
		'direction',
		'phone',
		'logitude',
		'latitude',
		'horary'
	];

  
}
