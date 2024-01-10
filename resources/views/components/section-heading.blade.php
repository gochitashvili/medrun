@props(['title', 'focusText', 'description' => '', 'viewMore' => ''])

@if ($description or $viewMore)
    @php
        $padingClass = 'pb-1 lg:pb-10';
    @endphp
@else
    @php
        $padingClass = 'pb-1 lg:pb-2';
    @endphp
@endif


<div class="flex lg:flex-col items-center lg:items-start justify-between relative">
    <div class="relative border-b w-full">
        <h2 class="sm:text-2xl sm:font-medium inline-block relative text-medrun-masala  {{ $padingClass }}">
            {{ $title }}
            @if ($focusText)
                <span class="font-semibold text-medrun-blue-light">{{ $focusText }}</span>
            @endif
            <div class="h-px w-full bg-medrun-blue-light absolute bottom-0"></div>
        </h2>
    </div>
    <div
        class="lg:absolute bottom-2 border-b lg:border-none lg:pb-0 pb-2 flex shrink-0 lg:w-full items-center gap-x-4 justify-between">
        @if ($description)
            <p class="text-medrun-masala hidden lg:block">{{ $description }}</p>
        @endif
        @if ($viewMore)
            <a href="{{ $viewMore }}"
                class="text-sm sm:text-lg text-medrun-masala font-medium hover:text-medrun-blue-light flex items-center gap-x-1">
                View More
                <x-icon.chevron-right class="w-4.5 h-4.5" />
            </a>
        @endif
    </div>
</div>
