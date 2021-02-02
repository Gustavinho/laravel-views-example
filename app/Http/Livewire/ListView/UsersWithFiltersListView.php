<?php

namespace App\Http\Livewire\ListView;

use App\Filters\UsersActiveFilter;
use App\Filters\UsersCreatedAtFilter;
use App\Filters\UsersTypeFilter;

class UsersWithFiltersListView extends UsersListView
{
    public $searchBy = ['name', 'email'];

    protected function filters()
    {
        return [
            new UsersTypeFilter,
            new UsersActiveFilter,
            new UsersCreatedAtFilter
        ];
    }
}
