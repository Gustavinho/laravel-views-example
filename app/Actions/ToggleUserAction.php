<?php

namespace App\Actions;

use LaravelViews\Actions\Action;
use LaravelViews\Actions\Confirmable;
use LaravelViews\Views\View;

class ToggleUserAction extends Action
{
    use Confirmable;

    public function getConfirmationMessage($model = null)
    {
        $status = $model->active ? 'deactivate' : 'activate';
        return "Do you want to {$status} {$model->name}?";
    }

    /**
     * Any title you want to be displayed
     * @var String
     * */
    public $title = "Activate/Deactivate";

    /**
     * This should be a valid Feather icon string
     * @var String
     */
    public $icon = "unlock";

    /**
     * Execute the action when the user clicked on the button
     *
     * @param $model Model object of the list where the user has clicked
     * @param $view Current view where the action was executed from
     */
    public function handle($model, View $view)
    {
        $model->update(['active' => !$model->active]);
        $this->success();
    }
}
