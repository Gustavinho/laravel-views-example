<?php

namespace App\Http\Livewire\DetailView;

use App\Models\User;
use LaravelViews\Facades\UI;
use LaravelViews\Views\DetailView;

class UserDetailView extends DetailView
{
    protected $modelClass = User::class;

    public function heading(User $model)
    {
        return [$model->name, 'User profile data'];
    }

    /**
     * @param $model Model instance
     * @return Array Array with all the detail data or the components
     */
    public function detail(User $model)
    {
        return [
            'Name' => $model->name,
            'Email' => $model->email,
            'Active' => $model->active ? UI::icon('check', 'success') : '',
            'Type' => $model->type,
            'Created' => $model->created_at->diffForHumans(),
            'Updated' => $model->updated_at->diffForHumans(),
        ];
    }
}
