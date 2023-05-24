<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class Button extends Component
{
    public $text;
    public $class;
    public function render()
    {
        return view('livewire.components.button');
    }
}
