<div>
    <form wire:submit="submit" class="flex flex-col space-y-4">
        <div>
            <label for="name">Name:</label>
            <x-text-input type="text" wire:model="name" />
            @error('name') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div>
            <label for="email">Email:</label>
            <x-text-input type="text" wire:model="email" />
            @error('email') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div>
            <label for="password">Password:</label>
            <x-text-input type="password" wire:model="password" />
            @error('password') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div>
            <label for="password_confirmation">Confirm Password:</label>
            <x-text-input type="password" wire:model="password_confirmation" />
            @error('password_confirmation') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div>
            <x-primary-button type="submit">Create User</x-primary-button>
        </div>
    </form>
</div>
