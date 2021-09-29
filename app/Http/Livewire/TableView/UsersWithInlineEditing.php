<?php

namespace App\Http\Livewire\TableView;

use App\Http\Livewire\UsersWithBulkActions;
use App\Models\User;
use LaravelViews\Facades\UI;
use LaravelViews\Views\Traits\WithAlerts;

class UsersWithInlineEditing extends UsersWithBulkActions
{
    use WithAlerts;

    /**
     * Sets the data to every cell of a single row
     *
     * @param $user Current model for each row
     */
    public function row(User $user): array
    {
        return [
            $user->id,
            UI::avatar(asset('storage/' . $user->avatar)),
            UI::editable($user, 'name'),
            UI::editable($user, 'email'),
            $user->active ? UI::icon('check', 'success') : '',
            ucfirst($user->type),
            $user->created_at->diffforHumans()
        ];
    }

    /**
     * Method fired by the `editable` component, it
     * gets the model instance and a key value array
     * with the modified
     */
    public function update(User $user, $data)
    {
        $user->update($data);
        $this->success();
    }
}
