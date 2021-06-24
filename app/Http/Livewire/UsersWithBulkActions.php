<?php

namespace App\Http\Livewire;

use App\Actions\Bulk\ChangeUsersAsAdmin;
use App\Actions\Bulk\ChangeUsersAsWriter;

class UsersWithBulkActions extends UsersWithActions
{
    protected function bulkActions()
    {
        return [
            new ChangeUsersAsWriter,
            new ChangeUsersAsAdmin
        ];
    }
}
