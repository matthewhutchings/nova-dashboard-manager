<?php

namespace NovaBi\NovaDashboardManager\Nova\Datavisualables;

use App\Nova\Resource;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\Text;


class Value extends BaseVisual
{
    /**
     * @var int sort order of morphables
     */
    public static $sort_order = 1;

    /**
     * The model the resource corresponds to.
     *
     * @var  string
     */
    public static $model = \NovaBi\NovaDashboardManager\Models\Datavisualables\Value::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var  string
     */
    public static $title = 'name';

    /**
     * The columns that should be searched.
     *
     * @var  array
     */
    public static $search = [];


    /**
     * Get the displayable singular label of the resource.
     *
     * @return  string
     */
    public function dynamicLabel() {

        return __('Value Widget');
    }



    /**
     * Get the fields displayed by the resource.
     *
     * @param \Illuminate\Http\Request $request
     * @return  array
     */
    public function visualFields(Request $request)
    {
        return [
            Boolean::make(__('Previous Value'), 'ShowPrevious')->help(__('Enable to show Value of previous date range with trend icon'))->default('true'),
        ];
    }
}
