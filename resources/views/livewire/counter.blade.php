<div>
    {{ $count }} 
    <button wire:click="increment">+</button>
    <button wire:click="decrement">-</button>
    <x-text-input wire:model.live="name" />
    <x-text-input wire:model="email" />
    <x-primary-button wire:click="refresh">Refresh</x-primary-button>

    <br>
    Meu nome é {{ $name }}
    <br>
    Meu email é {{ $email }}
</div>
