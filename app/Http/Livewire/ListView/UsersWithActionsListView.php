<?php

namespace App\Http\Livewire\ListView;

use App\Actions\ToggleUserAction;

class UsersWithActionsListView extends UsersWithFiltersListView
{
    protected function actionsByRow()
    {
        return [
            new ToggleUserAction
        ];
    }
}
