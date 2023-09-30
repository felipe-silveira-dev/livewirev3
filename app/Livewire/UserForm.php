<?php

namespace App\Livewire;

use App\Livewire\Forms\UserForm as FormsUserForm;
use App\Models\User;
use Livewire\Attributes\Rule;
use Livewire\Component;

class UserForm extends Component
{
    public FormsUserForm $form;

    public function render()
    {
        return view('livewire.user-form');
    }

    public function submit()
    {
        $this->validate();

        User::create([
            'name' => $this->form->name,
            'email' => $this->form->email,
            'password' => bcrypt($this->form->password)
        ]);
    }
}
