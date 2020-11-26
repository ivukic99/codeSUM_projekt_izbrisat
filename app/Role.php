<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasPermissions;

    public function permissions(){
        return $this->belongsToMany(Permission::class, 'roles_permissions');
    }

    public function hasPermissionTo(...$permssions){
        return $this->permissions()->whereIn('slug', $permssions)->count();
    }
}
