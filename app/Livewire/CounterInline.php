<?php

namespace App\Livewire;

use Livewire\Component;

class CounterInline extends Component
{
    public $count = 1;

    public function render()
    {
        return <<<'HTML'
        <div>
            Hello World from Livewire v3! CounterInline
            Count = {{ $count }}
        </div>
        HTML;
    }
}
