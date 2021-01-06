<?php

namespace App\Http\Livewire;

use App\Filters\UsersActiveFilter;
use App\Filters\UsersCreatedAtFilter;
use App\Filters\UsersTypeFilter;

class UsersWithFiltersTableView extends UsersWithSortColumnsTableView
{
    public $searchBy = ['name', 'email'];

    protected function filters()
    {
        return [
            new UsersActiveFilter,
            new UsersTypeFilter,
            new UsersCreatedAtFilter
        ];
    }
}
