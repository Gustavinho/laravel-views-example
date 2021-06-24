<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use LaravelViews\Facades\UI;
use LaravelViews\Views\GridView;

class UsersGridView extends GridView
{
    public $maxCols = 3;

    /**
     * Sets a initial query with the data to fill the grid view
     *
     * @return Builder Eloquent query
     */
    public function repository(): Builder
    {
        return User::query();
    }

    /**
     * Sets the data to every card on the view
     *
     * @param $item Current model for each card
     */
    public function card($item)
    {
        return [
            'image' => asset('storage/' . $item->profile_picture),
            'title' => $item->name,
            'subtitle' => ucfirst($item->type),
            'description' => $item->email
        ];
    }
}
