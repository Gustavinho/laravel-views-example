<?php

namespace App\Http\Livewire\ListView;

use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use LaravelViews\Views\ListView;

class UsersListView extends ListView
{
    public $paginate = 15;

    /**
     * Sets a initial query with the data to fill the table
     *
     * @return Builder Eloquent query
     */
    public function repository(): Builder
    {
        return User::query();
    }

    /**
     * Sets the properties to every list item component
     *
     * @param $model Current model for each card
     */
    public function data($model)
    {
        return [
            'avatar' => $model->avatar,
            'title' => $model->name,
            'subtitle' => $model->email,
        ];
    }
}
