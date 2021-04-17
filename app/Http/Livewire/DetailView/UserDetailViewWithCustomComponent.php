<?php

namespace App\Http\Livewire\DetailView;

class UserDetailViewWithCustomComponent extends UserDetailViewWithActions
{
    protected $detailComponent = 'components.user-detail';

    /**
     * @param $model Model instance
     * @return Array Array with all the detail data or the components
     */
    public function detail($model)
    {
        return [
            'user' => $model,
        ];
    }
}
