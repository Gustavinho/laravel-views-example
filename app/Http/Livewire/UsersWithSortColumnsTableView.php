<?php

namespace App\Http\Livewire;

use LaravelViews\Facades\Header;

class UsersWithSortColumnsTableView extends UsersTableView
{
    /**
     * Sets the headers of the table as you want to be displayed
     *
     * @return array<string> Array of headers
     */
    public function headers(): array
    {
        return [
            Header::title('ID')->sortBy('id'),
            'Avatar',
            Header::title('User')->sortBy('name'),
            Header::title('Email')->sortBy('email'),
            'Active',
            'Type',
            Header::title('Created')->sortBy('created_at')
        ];
    }
}
