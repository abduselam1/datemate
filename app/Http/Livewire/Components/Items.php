<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class Items extends Component
{

    public $text;
    public $ids;

    public function remove(){
        // dd($this->ids);
        $this->emit('remove',$this->ids ?? $this->text);
    }

    public function render()
    {
        return view('livewire.components.items');
    }
}
