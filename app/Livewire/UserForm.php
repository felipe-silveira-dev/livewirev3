<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\Rule;
use Livewire\Component;

class UserForm extends Component
{
    #[Rule(['required', 'min:3', 'max:255', 'unique:users,name'])]
    public string $name;
    #[Rule(['required', 'email', 'unique:users,email'])]
    public string $email;
    #[Rule(['required', 'min:8'])]
    public string $password;
    public string $passwordConfirmation;

    public function render()
    {
        return view('livewire.user-form');
    }

    public function submit()
    {
        $this->validate();

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password)
        ]);
    }
}
