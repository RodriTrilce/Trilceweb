<?php

namespace App\Models\Academia;

use Illuminate\Database\Eloquent\Model;

class Solution extends Model
{
	protected $fillable = [
		'university_id',
		'display',
		'exm_1',
		'exm_2',
		'exm_3',
		'created_at',
	];
}
