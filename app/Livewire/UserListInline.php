<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\Computed;
use Livewire\Component;
use Livewire\WithPagination;

class UserListInline extends Component
{
    use WithPagination;

    public function render()
    {
        return <<<'HTML'
        <div>
            <ul>
                @foreach($this->users as $user)
                    <li>{{ $user->name }}</li>
                @endforeach
            </ul>
            {{ $this->users->links() }}
        </div>
        HTML;
    }

    #[Computed]
    public function users()
    {
        return User::query()->select('id', 'name', 'email')->paginate(3);
    }
}
