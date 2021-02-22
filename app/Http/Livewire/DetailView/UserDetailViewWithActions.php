<?php

namespace App\Http\Livewire\DetailView;

use App\Actions\ToggleUserAction;

class UserDetailViewWithActions extends UserDetailView
{
    public function actions()
    {
        return [
            new ToggleUserAction,
        ];
    }
}
