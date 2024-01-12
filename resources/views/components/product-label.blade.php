@props(['color' => 'yellow-light', 'labelText', 'promoted' => false])

@switch($color)
    @case('yellow')
        @php
            $bgColorClass = 'bg-medrun-yellow-light';
            $textColorClass = 'text-medrun-yellow';
            $labelTextClass = 'text-medrun-masala';
        @endphp
    @break

    @case('sky')
        @php
            $bgColorClass = 'bg-medrun-sky-light';
            $textColorClass = 'text-medrun-blue-light';
            $labelTextClass = 'text-medrun-masala';
        @endphp
    @break

    @default
        @php
            $bgColorClass = 'bg-medrun-yellow-light';
            $textColorClass = 'text-medrun-yellow';
            $labelTextClass = 'text-medrun-masala';
        @endphp
@endswitch

@if ($promoted)
    @php
        $promotedClass = 'font-semibold';
    @endphp
@else
    @php
        $promotedClass = 'font-normal';
    @endphp
@endif


<div {{ $attributes->merge(['class' => 'absolute xs:-left-2 top-4']) }}>
    <span
        class="rounded-tr-md {{ $bgColorClass }} text-xs {{ $promotedClass }} {{ $labelTextClass }} py-1.5 px-2.5">{{ $labelText }}</span>
    <svg class="{{ $textColorClass }} hidden xs:block mt-0.5" width="8" height="11" viewBox="0 0 9 11" fill="none"
        xmlns="http://www.w3.org/2000/svg">
        <path d="M0 0H9V11L0 0Z" fill="currentColor" />
    </svg>
</div>
