<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count = 0;
    public $s = 0;

    public $a;
    public $b;

    public function somme($a, $b)
    {
        //$a = 6;
        //$b = 8;
        $this->s = $a + $b;
    }

    public function increment()
    {
        $this->count++;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
