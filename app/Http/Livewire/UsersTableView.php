<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use LaravelViews\Facades\UI;
use LaravelViews\Views\TableView;

class UsersTableView extends TableView
{
    protected $paginate = 10;

    protected function repository()
    {
        return User::query();
    }

    /**
     * Sets the headers of the table as you want to be displayed
     *
     * @return array<string> Array of headers
     */
    public function headers(): array
    {
        return [
            'ID',
            'Avatar',
            'User',
            'Email',
            'Active',
            'Type',
            'Created'
        ];
    }

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
            $user->name,
            $user->email,
            $user->active ? UI::icon('check', 'success') : '',
            ucfirst($user->type),
            $user->created_at->diffforHumans()
        ];
    }
}
