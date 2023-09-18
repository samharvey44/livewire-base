<?php

namespace App\Livewire;

use Illuminate\View\View;
use Livewire\Component;

class Login extends Component
{
    public function render(): View
    {
        return view('livewire.auth.login');
    }
}
