<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Reviewer extends Model
{

    protected $table = "users";


    protected static function boot()
    {
        parent::boot();

        $roleId = Role::where('slug', 'revisores')->first();
        if ($roleId) {
            static::addGlobalScope('roles', function (Builder $builder) use ($roleId) {
                return $builder->where('role_id', '=', $roleId->id);
            });
        }
    }
}
