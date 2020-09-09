<?php

namespace App\Nova;

use App\Rules\ExistOtherSchoolPeriodActive;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Boolean;


class SchoolPeriod extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\SchoolPeriod::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'name';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'name', 'description',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            Text::make(__('Nombre'), 'name')->sortable()->rules('required')
                ->creationRules('unique:project_types,name')
                ->updateRules('unique:project_types,name,{{resourceId}}'),
            Text::make(__('Descripción'), 'description')->hideFromIndex(),
            Boolean::make(__('Estado'), 'state')->rules('required')
            ->creationRules(new ExistOtherSchoolPeriodActive)
            ->updateRules(new ExistOtherSchoolPeriodActive($request->route('resourceId')))
            ->trueValue(1)->falseValue(0)->sortable()->sortable()
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }

    public static function label()
    {
        return __('Periodos');
    }

    public static function singularLabel()
    {
        return __('Periodo');
    }
}
