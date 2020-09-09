<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;



class Student extends User
{

    protected $table = "users";


    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('roles', function (Builder $builder) {
            return $builder->whereHas('roles', function (Builder $query) {
                $query->where('slug','administrador');
            });
        });
    }



    
}
