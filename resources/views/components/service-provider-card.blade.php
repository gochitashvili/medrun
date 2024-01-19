@props(['labelText' => 'Text', 'labelColor' => 'yellow', 'variant' => 'default', 'promoted' => false])


@if ($promoted)
    @php
        $promotedClass = 'border border-medrun-yellow-dark';
    @endphp
@else
    @php
        $promotedClass = 'border';
    @endphp
@endif


@switch($variant)
    @case('default')
        <div class="relative bg-white space-y-3 p-4 rounded-xl {{ $promotedClass }} ">
            <div>
                <img src="https://placehold.co/56x56" class="w-14 h-14 rounded-full" alt="Img">
            </div>
            <div class="flex items-center space-x-3">
                <p class="text-sm text-medrun-masala">Lorem ipsum dolor sit amet consectetur. Quam placerat in enim pharetra
                    quis.</p>
                <button
                    class="text-sm flex-shrink-0 leading-4 font-medium text-medrun-masala hover:bg-gray-50 p-2 rounded focus-visible:outline-none border border-medrun-masala bg-gray-100">
                    Get a Quote
                </button>
            </div>
            <div>
                <p class="text-xs text-medrun-masala">ISO9001&nbsp;&nbsp;ISO1702&nbsp;&nbsp;ISO 17205&nbsp;&nbsp;A2LA</p>
            </div>
        </div>
    @break

    @case('simple')
        <div class="flex items-center space-x-3 relative bg-white shadow-sm  p-4 rounded-xl {{ $promotedClass }} ">
            <div>
                <img src="https://placehold.co/56x56" class="w-14 h-14 rounded-full" alt="Img">
            </div>
            <div class="space-y-1">
                <h3 class="text-sm text-medrun-masala hover:text-medrun-sky transition duration-200">
                    <a href="#">Company Name</a>
                </h3>
                <div class="text-medrun-yellow flex items-center">
                    <x-icon.star class="w-4 h-4 p-0.5" />
                    <x-icon.star class="w-4 h-4 p-0.5" />
                    <x-icon.star class="w-4 h-4 p-0.5" />
                    <x-icon.star class="w-4 h-4 p-0.5" />
                    <x-icon.star class="w-4 h-4 p-0.5" />
                </div>
            </div>
        </div>
    @break

    @default
@endswitch
