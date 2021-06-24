<?php

namespace App\Http\Livewire\ListView;

use App\Actions\Bulk\ChangeUsersAsAdmin;
use App\Actions\Bulk\ChangeUsersAsWriter;

class UsersWithBulkActionsListView extends UsersWithActionsListView
{
    public function bulkActions()
    {
        return [
            new ChangeUsersAsAdmin,
            new ChangeUsersAsWriter,
        ];
    }
}
