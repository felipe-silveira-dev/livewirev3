<?php

namespace App\Livewire;

use Livewire\Component;

class Calculadora extends Component
{
    public float $num1;

    public float $num2;

    public ?float $result = null;

    public string $operator = '+';

    public function render()
    {
        return view('livewire.calculadora');
    }

    public function calculate()
    {
        $tmp = "$this->num1 $this->operator $this->num2";

        $this->result = eval("return $tmp;");
    }
}
