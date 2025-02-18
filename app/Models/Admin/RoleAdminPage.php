<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use App\Role;

class RoleAdminPage extends Model
{
	public function roles()
	{
	  return $this
	      ->belongsTo('App\Role')
	      ->withTimestamps();
	}

    public function info()
    {
        return $this->hasOne('App\Models\Admin\AdminPage', 'id', 'admin_page_id');
    }
}
