<?php

namespace App\View\Components;

use App\Models\User;
use Illuminate\View\Component;

class AppLayout extends Component
{

    public $users;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->users = User::all();
    }

    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('layouts.app');
    }
}
