<?php

namespace App\View\Components;

use App\Models\Project as ModelsProject;
use App\Models\User;
use Illuminate\View\Component;

class project extends Component
{
    public $projets;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->projets = ModelsProject::where('user_id', auth()->user()->id)->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.project')->with('projects', $this->projets);
    }
}
