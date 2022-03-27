<?php

namespace App\View\Components;

use App\Models\Contact;
use App\Models\Realisation;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\View\Component;

class AllUsers extends Component
{

    public $users;
    public $usersCount;
    public $contacts;
    public $publications;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->users = DB::table('users')->paginate(10);
        $this->usersCount = User::all();
        $this->publications = Realisation::all();
        $this->contacts = Contact::all();
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
