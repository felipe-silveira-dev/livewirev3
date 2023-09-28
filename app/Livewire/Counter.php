<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count = 1;
    public $name;
    public $email;

    public function mount()
    {
        $this->fill([
            'counter' => 100,
            'name' => 'Felipe Silveira',
            'email' => 'silveira@dev.com'
        ]);
    }

 
    public function increment()
    {
        $this->count++;
    }
 
    public function decrement()
    {
        $this->count--;
    }
 
    public function render()
    {
        return view('livewire.counter');
    }
}
