<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Yadahan\AuthenticationLog\AuthenticationLogable;
use App\Models\Post;
use App\Models\Admin\RoleAdminPage;

/*
 Asignar un rol a un usuario en tinker
 php artisan tinker

 use Role;
 use User;

 $u = User::find(id_usuario);
 $rol = Role::find(1); // 1->admin

 $u->roles()->attach($rol);
 $u->save();

*/

class User extends Authenticatable
{
    use Notifiable, AuthenticationLogable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function roles()
    {
        return $this
            ->belongsToMany('App\Role')
            ->withTimestamps();
    }

    public function rolesPages()
    {
        foreach ($this->roles as $key) {
            return RoleAdminPage::where('role_id', $key->id)->get();
        }
    }

    public function authorizeRoles($roles)
    {
        if ($this->hasAnyRole($roles)) {
            return true;
        }
        abort(401, 'Esta acción no está autorizada.');
    }

    public function hasAnyRole($roles)
    {
        if (is_array($roles)) {
            foreach ($roles as $role) {
                if ($this->hasRole($role)) {
                    return true;
                }
            }
        } else {
            if ($this->hasRole($roles)) {
                return true;
            }
        }
        return false;
    }

    public function hasRole($role)
    {
        if ($this->roles()->where('name', $role)->first()) {
            return true;
        }
        return false;
    }

    public function posts()
    {
      return $this->hasMany('App\Models\Post');
    }
    
}
