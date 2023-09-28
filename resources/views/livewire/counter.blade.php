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

    <div x-date-time="new Date()">
        {{ now() }}
    </div>

    <div x-data="">
        <span x-text="$wire.name"></span>
        <span x-text="$wire.email"></span>
        <x-secondary-button x-on:click="$wire.set('name', 'Luffy do chapéu de Palha')">Mudar Nome Indo no Backend</x-secondary-button>
        <x-secondary-button x-on:click="$wire.name = 'Luffy do chapéu de Palha'">Mudar Nome Direto no FrontEnd</x-secondary-button>
    </div>
</div>
