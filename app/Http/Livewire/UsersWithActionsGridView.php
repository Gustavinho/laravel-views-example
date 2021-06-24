<?php

namespace App\Http\Livewire;

use App\Actions\ChangeUserAsAdmin;
use App\Actions\ChangeUserAsWriter;
use App\Actions\ToggleUserAction;

class UsersWithActionsGridView extends UsersWithFiltersGridView
{
    protected function actionsByRow()
    {
        return [
            new ChangeUserAsAdmin,
            new ChangeUserAsWriter,
            new ToggleUserAction,
        ];
    }
}
