<?php

namespace App\View\Components;

use App\Models\Documentation;
use Illuminate\View\Component;

class Menu extends Component
{
    public Documentation $documentation;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(Documentation $documentation)
    {
        $this->documentation = $documentation;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        $menu = $this->documentation->get('menu');

        return view('components.menu', [
            'menu' => $menu
        ]);
    }
}
