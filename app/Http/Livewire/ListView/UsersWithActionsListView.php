<?php

namespace App\Http\Livewire\ListView;

use App\Actions\ChangeUserAsAdmin;
use App\Actions\ChangeUserAsWriter;
use App\Actions\ToggleUserAction;

class UsersWithActionsListView extends UsersWithFiltersListView
{
    protected function actionsByRow()
    {
        return [
            new ChangeUserAsAdmin,
            new ChangeUserAsWriter,
            new ToggleUserAction
        ];
    }
}
