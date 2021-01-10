<?php

namespace App\Http\Livewire;

use App\Actions\ToggleUserAction;

class UsersWithActionsGridView extends UsersWithFiltersGridView
{
    public $searchBy = ['name', 'email'];

    protected function actionsByRow()
    {
        return [
            new ToggleUserAction,
            new ToggleUserAction,
        ];
    }
}
