<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Boolean;
use Benjaminhirsch\NovaSlugField\Slug;
use Pktharindu\NovaPermissions\Checkboxes;
use Pktharindu\NovaPermissions\Nova\Role as RoleResource;

class Role extends RoleResource
{
    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            Text::make(__('nombre'), 'name')->sortable(),
            Slug::make(__('Slug'), 'slug')
                ->rules('required')
                ->creationRules('unique:' . config('nova-permissions.table_names.roles', 'roles'))
                ->updateRules('unique:' . config('nova-permissions.table_names.roles', 'roles') . ',slug,{{resourceId}}')
                ->sortable(),
            Checkboxes::make(__('Permisos'), 'permissions')
                ->withGroups()
                ->options(collect(config('nova-permissions.permissions'))->map(function ($permission, $key) {
                    return [
                        'group'        => __($permission['group']),
                        'option'       => $key,
                        'label'        => __($permission['display_name']),
                        'description'  => __($permission['description']),
                    ];
                })->groupBy('group')->toArray()),
            Boolean::make(__('Está bloqueado ?'), 'is_lock')->hideWhenUpdating(function () {
                return $this->is_lock == 1;
            })
        ];
    }
}
