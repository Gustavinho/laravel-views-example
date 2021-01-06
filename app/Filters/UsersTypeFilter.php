<?php

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;
use LaravelViews\Filters\BooleanFilter;

class UsersTypeFilter extends BooleanFilter
{
    /**
     * Modify the current query when the filter is used
     *
     * @param Builder $query Current query
     * @param Array $value Associative array with the boolean value for each of the options
     * @return Builder Query modified
     */
    public function apply(Builder $query, $value): Builder
    {
        $values = collect($value)->filter(fn ($filter) => $filter)->keys()->toArray();

        if (count($values)) {
            return $query->whereIn('type', $values);
        }

        return $query;
    }

    /**
     * Defines the title and value for each option
     *
     * @return Array associative array with the title and values
     */
    public function options(): Array
    {
        return [
            'Admin' => 'admin',
            'Writer' => 'writer',
            'Viewer' => 'viewer',
        ];
    }
}
