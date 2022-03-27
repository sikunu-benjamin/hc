<?php

namespace App\View\Components\admin;

use App\Models\Project;
use Illuminate\Support\Facades\DB;
use Illuminate\View\Component;

class devis extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $projects = DB::table('projects')->paginate(10);
        return view('components.admin.devis')->with('projects', $projects);
    }
}
