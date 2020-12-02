<?php

namespace App\Traits;

use App\Permisson;

trait HasPermission{

    public function hasPermissionTo(...$permssions){
        return $this->permissions()->whereIn('slug', $permssions)->count() ||
        $this->$roles()->whereHas('permissions', function($q) use ($permssions){
            $q->whereIn('slug', $permssions);
        })->count();
    }

    private function getPermissionIdsBySlug($permssions){
        return Permission::whereIn('slug', $permssions)->get()->pluck('id')->toArray();
    }

    public function givePermissionTo(...$permssions){
        $this->permissions()->attach($this->getPermissionIdsBySlug($permssions));
    }

    public function setPermissions(...$permssions){
        $this->permissions()->sync($this->getPermissionIdsBySlug($permssions));
    }

    public function detachPermissions(...$permssions){
        return $this->permissions()->detach($this->getPermissionIdsBySlug($permssions));
    }
}