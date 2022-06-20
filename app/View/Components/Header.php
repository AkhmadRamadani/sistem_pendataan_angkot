<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\User;

use Illuminate\Support\Facades\Auth;
class Header extends Component
{
    public  $user;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->user = Auth::user();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.header');
    }
}
