@props(['title' => '', 'focusText' => '', 'description' => '', 'viewMore' => '', 'variant' => 'default'])

@if ($description or $viewMore)
    @php
        $padingClass = 'pb-1 lg:pb-10';
    @endphp
@else
    @php
        $padingClass = 'pb-1 lg:pb-2';
    @endphp
@endif


@switch($variant)
    @case('default')
        <div class="flex lg:flex-col items-center lg:items-start justify-between relative">
            <div class="relative flex items-center justify-between border-b w-full">
                <h2 class="sm:text-2xl sm:font-medium inline-block relative text-medrun-masala  {{ $padingClass }}">
                    {{ $title }}
                    @if ($focusText)
                        <span class="font-semibold text-medrun-blue-light">{{ $focusText }}</span>
                    @endif
                    <div class="h-px w-full bg-medrun-blue-light absolute bottom-0"></div>
                </h2>
                {{ $slot }}
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
    @break

    @case('simple')
        <div class="flex lg:flex-col items-center justify-between relative">
            <div class="relative flex justify-between items-center border-b w-full">
                <h2 class="sm:text-2xl sm:font-medium inline-block relative text-medrun-masala pb-1 lg:pb-3">
                    {{ $title }}
                    @if ($focusText)
                        <span class="font-semibold text-medrun-blue-light">{{ $focusText }}</span>
                    @endif
                    <div class="h-px w-full bg-medrun-blue-light absolute bottom-0"></div>
                </h2>
                @if ($viewMore)
                    <a href="{{ $viewMore }}"
                        class="text-sm sm:text-lg text-medrun-masala font-medium hover:text-medrun-blue-light flex items-center gap-x-1">
                        View More
                        <x-icon.chevron-right class="w-4.5 h-4.5" />
                    </a>
                @endif
            </div>
        </div>
    @break

    @case('centered')
        <div class="flex lg:flex-col items-center lg:items-start justify-between relative">
            <div class="relative border-b w-full flex justify-center">
                <h2 class="text-2xl sm:font-medium inline-block relative text-medrun-masala  {{ $padingClass }}">
                    @if ($title)
                        {{ $title }}
                    @endif
                    @if ($focusText)
                        <span class="font-semibold text-medrun-blue-light">{{ $focusText }}</span>
                    @endif
                    <div class="h-px w-full bg-medrun-blue-light absolute bottom-0"></div>
                </h2>
            </div>
            <div
                class="lg:absolute bottom-2 border-b lg:border-none lg:pb-0 pb-2 flex shrink-0 lg:w-full items-center gap-x-4 justify-center">
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
    @break

    @case('flat')
        <div class="flex lg:flex-col items-center lg:items-start justify-between relative">
            <div class="relative flex items-center justify-between border-b w-full pb-2">
                <h2 class="sm:text-2xl sm:font-medium inline-block relative text-medrun-masala ">
                    {{ $title }}
                    @if ($focusText)
                        <span class="font-semibold text-medrun-blue-light">{{ $focusText }}</span>
                    @endif
                </h2>
                {{ $slot }}
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
    @break

    @default
@endswitch
