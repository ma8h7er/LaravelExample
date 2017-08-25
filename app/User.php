<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';
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
        return $this->belongsToMany(Role::class, 'role_user'); // role_user called pivot
    }

    public function hasAccess($permission_slug) // create-post
    {
        $access = false;

        $permission = Permission::where('slug', '=', $permission_slug)->first();
        if($permission) {
            foreach ($this->roles as $role){
                $rolePermissions = $role->getPermissionsIds();

                if(in_array($permission->id, $rolePermissions)) {
                    $access = true;
                }
            }
        }

        return $access;
    }
}
