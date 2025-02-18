<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
	public function users()
	{
		return $this
		->belongsToMany('App\User');
	}

	public function adminPage()
 	{
		return $this
		->belongsToMany('App\Models\Admin\RoleAdminPage', 'role_id');
	}
}
