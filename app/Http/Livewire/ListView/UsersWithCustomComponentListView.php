<?php

namespace App\Http\Livewire\ListView;

use Carbon\Carbon;

class UsersWithCustomComponentListView extends UsersWithActionsListView
{
    public $itemComponent = 'components.custom-list-item';

    /**
     * Sets the properties to every list item component
     *
     * @param $model Current model for each card
     */
    public function data($model)
    {
        return [
            'date' => Carbon::now()
        ];
    }
}
