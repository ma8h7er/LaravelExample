<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';

    protected $fillable = ['name', 'description'];


    /**
     * This function when you have $role SO you can use it as follow:
     * $role->users()  || this will return all users those belong to this role
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function users()
    {
        return $this->belongsToMany(User::class, 'role_user');
    }

    public function permissions()
    {
        return $this->belongsToMany(Permission::class, 'role_permission');
    }

    public function getPermissionsIds()
    {
        $ids = [];
        foreach ($this->permissions as $p) {
            $ids[] = $p->id;
        }

        //Array of permissions ids related to this role
        return $ids;
    }


}
