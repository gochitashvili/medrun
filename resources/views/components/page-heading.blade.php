@props(['title' => '', 'focusText' => ''])


<div class="relative">
    <div class="relative border-b w-full">
        <h2 class="inline-flex items-center relative text-medrun-masala  pb-1 lg:pb-2">
            {{ $title }}
            @if ($focusText)
                <svg class="w-3 h-3 text-medrun-blue-light mx-2.5" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="6" cy="6" r="4" fill="currentColor" />
                </svg>
                <span class="font-semibold text-medrun-blue-light">{{ $focusText }}</span>
            @endif
            <div class="h-px w-full bg-medrun-blue-light absolute bottom-0"></div>
        </h2>
    </div>
</div>
