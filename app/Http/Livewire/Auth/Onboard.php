<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;

class Onboard extends Component
{
    public function render()
    {
        return view('livewire.auth.onboard')->layout('auth-layout');
    }
}
