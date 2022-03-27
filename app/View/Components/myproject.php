<?php

namespace App\View\Components;

use App\Models\Project;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class myproject extends Component
{
    public $projects;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        dd(Auth::user());
        $this->projects = Project::where('user_id', auth()->user()->id)->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.myproject')->with('projects', $this->projects);
    }
}
