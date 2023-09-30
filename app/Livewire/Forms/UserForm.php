<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Rule;
use Livewire\Form;

class UserForm extends Form
{
    #[Rule(['required', 'min:3', 'max:255', 'unique:users,name'])]
    public string $name;
    #[Rule(['required', 'email', 'unique:users,email'])]
    public string $email;
    #[Rule(['required', 'min:8'])]
    public string $password;
    public string $passwordConfirmation;
}
