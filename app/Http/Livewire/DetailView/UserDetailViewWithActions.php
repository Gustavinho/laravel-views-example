<?php

namespace App\Http\Livewire\DetailView;

use App\Actions\ChangeUserAsAdmin;
use App\Actions\ChangeUserAsWriter;
use App\Actions\ToggleUserAction;

class UserDetailViewWithActions extends UserDetailView
{
    public function actions()
    {
        return [
            new ChangeUserAsAdmin,
            new ChangeUserAsWriter,
            new ToggleUserAction,
        ];
    }
}
