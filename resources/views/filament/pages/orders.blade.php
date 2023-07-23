{{-- <x-filament::page>
    <livewire:ticket-orders />
    <livewire:package-orders />

    @foreach ($tables as $table)
        @livewire($table)
    @endforeach
</x-filament::page> --}}

<x-filament::page :active-tab="$activeTab" :actions="null">
    <div class="flex justify-center">
        <x-filament::tabs>
            @foreach ($tables as $key)
                <x-filament::tabs.item :active="$key == $activeTab" wire:click="$set('activeTab', '{{ $key }}')"
                    @class([
                        'flex h-8 items-center whitespace-nowrap rounded-lg px-5 font-medium outline-none focus:ring-2 focus:ring-inset focus:ring-primary-600',
                        'hover:text-gray-800 focus:text-primary-600' => $activeTab !== $key,
                        'dark:text-gray-400 dark:hover:text-gray-300 dark:focus:text-gray-400' =>
                            $activeTab !== $key && config('filament.dark_mode'),
                        'bg-white text-primary-600 shadow' => $activeTab === $key,
                        'dark:bg-primary-600 dark:text-white' =>
                            $activeTab === $key && config('filament.dark_mode'),
                    ])>
                    {{ Str::title($key) }}
                </x-filament::tabs.item>
            @endforeach
        </x-filament::tabs>
    </div>
    @foreach ($tables as $key)
        <div @if ($activeTab != $key) hidden @endif>
            @livewire($key, key($key))
        </div>
    @endforeach
</x-filament::page>
