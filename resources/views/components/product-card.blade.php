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
        <div class="relative bg-white pt-3 pb-16 px-2 rounded-xl gap-3 {{ $promotedClass }} lg:max-w-72">

            <!-- Product Label -->
            @if ($labelText)
                <x-product-label labelText="{{ $labelText }}" color="{{ $labelColor }}" :promoted="$promoted" />
            @endif

            <!-- Image -->
            <div class="mb-3">
                <img class="aspect-square object-cover mx-auto object-center w-full" src="https://placehold.co/508x508"
                    alt="Image">
            </div>
            <div class="flex items-center mb-2 text-xs text-medrun-masala">
                <span><span class="hidden xl:inline">Brand:</span> Manufacturer-2 •</span>
                <span><span class="hidden xl:inline">Model:</span> Model-3</span>
            </div>
            <h3 class="text-xs text-medrun-masala font-semibold hover:text-medrun-blue-light mb-3 transition duration-200">
                <a href="#">
                    Lot of 2 Getac F110 G2 i5-5200u 4GB RAM Rugged Tablets | As-Is Boots to
                    BIOS
                </a>
            </h3>
            <div class="flex items-center space-x-3 mb-3">
                <span class="text-xs text-medrun-blue">$3000</span>
                <span class="text-lg font-semibold text-medrun-blue">$2600</span>
            </div>
            <div class="absolute bottom-3 inset-x-0 px-2">
                <button type="button"
                    class="rounded-md bg-white w-full px-2.5 py-3 uppercase text-xs font-semibold text-medrun-masala  ring-1 ring-inset ring-medrun-blue hover:bg-gray-50 transition duration-200">Buy
                    Now</button>
            </div>
        </div>
    @break

    @case('simple')
        <div class="relative bg-white py-3 px-4 rounded-xl gap-3 border lg:max-w-72">

            <!-- Image -->
            <div class="mb-3">
                <img class="aspect-square object-cover mx-auto object-center w-full" src="https://placehold.co/508x508"
                    alt="Image">
            </div>
            <h3 class="text-xs text-medrun-masala font-semibold hover:text-medrun-blue-light mb-3 transition duration-200">
                <a href="#">
                    Lab Product-1
                </a>
            </h3>
            <div class="flex items-center space-x-3">
                <span class="text-xs text-medrun-blue">$3000</span>
                <span class="text-lg font-semibold text-medrun-blue">$2600</span>
            </div>
        </div>
    @break

    @default
@endswitch
