@props(['title'])
<div x-data="{ open: false }" @keydown.escape.stop="open = false" @click.away="open = false"
    class="relative inline-block text-left">
    <div class="flex items-center">
        <button type="button" @click="open =! open"
            class="inline-flex w-full justify-center gap-x-1 bg-white text-sm sm:font-medium text-medrun-masala leading-4  hover:text-medrun-sky transition duration-200"
            id="menu-button" aria-expanded="true" aria-haspopup="true">
            {{ $title }}
            <x-icon.chevron-down class="-mt-px w-4.5 h-4.5" />
        </button>
    </div>

    <!-- Category select dropdown -->
    <div x-show="open" x-transition:enter="transition ease-out duration-100"
        x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100"
        x-transition:leave-end="transform opacity-0 scale-95"
        class="absolute right-0 z-10 mt-2 w-56 origin-top-right divide-y divide-gray-100 rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
        x-ref="menu-items" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1"
        style="display: none;">
        <div class="py-1" role="none">
            {{ $slot }}
        </div>
    </div>
</div>
