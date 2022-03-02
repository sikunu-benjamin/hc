<?php

namespace App\View\Components;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\View\Component;

class AllUsers extends Component
{

    public $users;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->users = DB::table('users')->paginate(10);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.all-users');
    }
}
