<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Step extends Component
{
    public $steps = [];

    public function increment()
    {
        // dump($this->steps);
        $this->steps[] = count($this->steps);
        // dump($this->steps);

    }

    public function remove($index)
    {
        unset($this->steps[$index]);
    }

    public function render()
    {
        return view('livewire.step');
    }
}
