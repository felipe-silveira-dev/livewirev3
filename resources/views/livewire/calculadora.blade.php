<div>
    <form wire:submit='calculate'>
        <x-text-input wire:model="num1" label="Numero 1" />
        <select wire:model='operator' class="text-black">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <x-text-input wire:model="num2" label="Numero 2"
            wire.keydown.enter="calculate"
            wire:keydown.u='num1 = 34891247239874389274'
        />
        <x-primary-button wire:click="calculate">Calcular</x-primary-button>
        <x-secondary-button type="submit">Calcular com submit form</x-secondary-button>
    </form>
    <span> Resultado: {{ $result }} </span>
</div>
