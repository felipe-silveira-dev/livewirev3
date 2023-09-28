<div>
    <x-text-input wire:model="num1" label="Numero 1" />
    <select wire:model='operator' class="text-black">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <x-text-input wire:model="num2" label="Numero 2" />
    <x-primary-button wire:click="calculate">Calcular</x-primary-button>
    <x-text-input wire:model="result" label="Resultado" />
</div>
