<?php

namespace App\Livewire;

use Livewire\Component;

class CounterInline extends Component
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

    public function render()
    {
        return <<<'HTML'
        <div>
            Hello World from Livewire v3! CounterInline
            Count = {{ $count }}
            <br>
            Meu nome é {{ $name }}
            <br>
            Meu email é {{ $email }}
            <br>
        </div>
        HTML;
    }
}
