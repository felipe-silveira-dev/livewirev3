<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class UserInline extends Component
{
    public User $user;

    public function rules()
    {
        return [
            'user.name' => 'required|min:6',
            'user.email' => 'required|email',
        ];
    }

    public function mount()
    {
        $this->user = auth()->user();
    }

    public function refresh()
    {}

    public function render()
    {
        return <<<'HTML'
        <div>
            <div class="flex items-center">
                <div class="flex-shrink-0 h-10 w-10">
                    <img class="h-10 w-10 rounded-full" src="{{ $user->avatar }}" alt="">
                </div>
                <div class="ml-4">
                    <div class="text-sm font-medium text-gray-900">
                        {{ $user->name }}
                    </div>
                    <div class="text-sm text-gray-500">
                        {{ $user->email }}
                    </div>
                </div>
                <x-secondary-button wire:click="refresh" class="ml-4">
                    Refresh
                </x-secondary-button>
            </div>
        </div>
        HTML;
    }
}
