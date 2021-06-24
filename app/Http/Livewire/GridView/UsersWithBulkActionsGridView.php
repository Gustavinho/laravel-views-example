<?php

namespace App\Http\Livewire\GridView;

use App\Actions\Bulk\ChangeUsersAsAdmin;
use App\Actions\Bulk\ChangeUsersAsWriter;
use App\Http\Livewire\UsersWithActionsGridView;

class UsersWithBulkActionsGridView extends UsersWithActionsGridView
{
    public function bulkActions()
    {
        return [
            new ChangeUsersAsAdmin,
            new ChangeUsersAsWriter
        ];
    }
}
