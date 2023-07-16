@props(['activeTab'])

<x-filament::page :active-tab="$activeTab" :actions="null">
    {{-- {{ $table }} --}}
    <div class="flex justify-center">
        <x-filament::tabs>
            @foreach ($tables as $key => $resource)
                <x-filament::tabs.item :active="$key == $activeTab" wire:click="$set('activeTab', '{{ $key }}')">
                    {{ Str::title($key) }}
                </x-filament::tabs.item>
            @endforeach
        </x-filament::tabs>
    </div>
    @foreach ($tables as $key => $resource)
        <div @if ($activeTab != $key) hidden @endif>
            @livewire($resource, key($key))
        </div>
    @endforeach
</x-filament::page>
