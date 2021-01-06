<?php

namespace App\Http\Livewire;

use App\Actions\ToggleUserAction;

class UsersWithActions extends UsersWithFiltersTableView
{
    protected function actionsByRow()
    {
        return [
            new ToggleUserAction
        ];
    }
}
