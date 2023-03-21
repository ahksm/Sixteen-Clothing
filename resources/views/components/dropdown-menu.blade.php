<div x-show="dropdownOpen" x-on:click.away="dropdownOpen = false">
    <x-slot name="trigger">
        <button x-on:click="dropdownOpen = !dropdownOpen" class="focus:outline-none">
            <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
        </button>
    </x-slot>
    <x-slot name="content">
        {{ $slot }}
    </x-slot>
</div>