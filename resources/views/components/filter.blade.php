<div {{ $attributes->merge(['class']) }}>
    <div class="mb-4 lg:mb-6 px-4 py-2.5 bg-medrun-light rounded">
        <h2 class="text-medrun-masala  lg:text-2xl font-semibold ">Filter By</h2>
    </div>
    <!-- Filters -->
    <div class="space-y-4 lg:space-y-6">

        <div class="flex items-center space-x-2.5">
            <input type="number" id="min" placeholder="Min"
                class="p-2.5 rounded-lg max-w-20 text-sm text-medrun-stone placeholder:text-medrun-masala border-0 bg-medrun-sky/5 focus:ring-1 focus:ring-medrun-sky-light">
            <input type="number" id="max" placeholder="Max"
                class="p-2.5 rounded-lg max-w-20 text-sm text-medrun-stone placeholder:text-medrun-masala border-0 bg-medrun-sky/5 focus:ring-1 focus:ring-medrun-sky-light">
        </div>

        <div>
            <span class="mb-4 block text-lg font-medium text-medrun-stone">Listing Type</span>
            <div class="flex items-center">
                <input id="types-0" name="types[]" value="xs" type="checkbox"
                    class="h-4 w-4 rounded border-gray-300 text-medrun-sky focus:ring-medrun-sky-light">
                <label for="types-0" class="ml-2 text-sm text-medrun-masala">Request a Quote</label>
            </div>
        </div>

        <div>
            <span class="mb-4 block text-lg font-medium text-medrun-stone">Condition</span>
            <div class="space-y-3">
                <div class="flex items-center">
                    <input id="condition-0" name="condition[]" value="xs" type="checkbox"
                        class="h-4 w-4 rounded border-gray-300 text-medrun-sky focus:ring-medrun-sky-light">
                    <label for="condition-0" class="ml-2 text-sm text-medrun-masala">Used (12)</label>
                </div>
                <div class="flex items-center">
                    <input id="condition-1" name="condition[]" value="xs" type="checkbox"
                        class="h-4 w-4 rounded border-gray-300 text-medrun-sky focus:ring-medrun-sky-light">
                    <label for="condition-1" class="ml-2 text-sm text-medrun-masala">Not Specified
                        (12)</label>
                </div>
            </div>
        </div>


        <div>
            <span class="mb-4 block text-lg font-medium text-medrun-stone">Category</span>
            <div class="space-y-3">
                <div class="flex items-center">
                    <input id="category-0" name="category[]" value="xs" type="checkbox"
                        class="h-4 w-4 rounded border-gray-300 text-medrun-sky focus:ring-medrun-sky-light">
                    <label for="category-0" class="ml-2 text-sm text-medrun-masala">Analytical
                        (6)</label>
                </div>
                <div class="flex items-center">
                    <input id="category-1" name="condition[]" value="xs" type="checkbox"
                        class="h-4 w-4 rounded border-gray-300 text-medrun-sky focus:ring-medrun-sky-light">
                    <label for="category-1" class="ml-2 text-sm text-medrun-masala">Clinical
                        (13)</label>
                </div>
                <div class="flex items-center">
                    <input id="category-2" name="condition[]" value="xs" type="checkbox"
                        class="h-4 w-4 rounded border-gray-300 text-medrun-sky focus:ring-medrun-sky-light">
                    <label for="category-2" class="ml-2 text-sm text-medrun-masala">Life Science
                        (47)</label>
                </div>
                <div class="flex items-center">
                    <input id="category-3" name="condition[]" value="xs" type="checkbox"
                        class="h-4 w-4 rounded border-gray-300 text-medrun-sky focus:ring-medrun-sky-light">
                    <label for="category-3" class="ml-2 text-sm text-medrun-masala">Research News
                        (89)</label>
                </div>

                <div class="flex items-center">
                    <input id="category-4" name="condition[]" value="xs" type="checkbox"
                        class="h-4 w-4 rounded border-gray-300 text-medrun-sky focus:ring-medrun-sky-light">
                    <label for="category-4" class="ml-2 text-sm text-medrun-masala">Lab Products
                        (90)</label>
                </div>
                <div class="flex items-center">
                    <input id="category-5" name="condition[]" value="xs" type="checkbox"
                        class="h-4 w-4 rounded border-gray-300 text-medrun-sky focus:ring-medrun-sky-light">
                    <label for="category-5" class="ml-2 text-sm text-medrun-masala">Automation
                        (98)</label>
                </div>
                <div class="flex items-center">
                    <input id="category-6" name="condition[]" value="xs" type="checkbox"
                        class="h-4 w-4 rounded border-gray-300 text-medrun-sky focus:ring-medrun-sky-light">
                    <label for="category-6" class="ml-2 text-sm text-medrun-masala">Detection
                        (3)</label>
                </div>

            </div>
            <a class="text-sm inline-flex gap-x-0.5 text-medrun-masala mt-3 hover:text-medrun-sky transition duration-200"
                href="#">
                See more
                <x-icon.chevron-down class="w-4.5 h-4.5 text-medrun-blue" />
            </a>
        </div>

        <div>
            <span class="mb-4 block text-lg font-medium text-medrun-stone">Manufacturer</span>
            <div class="space-y-3">
                <div class="flex items-center">
                    <input id="manufacturer-0" name="manufacturer[]" value="xs" type="checkbox"
                        class="h-4 w-4 rounded border-gray-300 text-medrun-sky focus:ring-medrun-sky-light">
                    <label for="manufacturer-0" class="ml-2 text-sm text-medrun-masala">Collette
                        (13)</label>
                </div>
                <div class="flex items-center">
                    <input id="manufacturer-1" name="manufacturer[]" value="xs" type="checkbox"
                        class="h-4 w-4 rounded border-gray-300 text-medrun-sky focus:ring-medrun-sky-light">
                    <label for="manufacturer-1" class="ml-2 text-sm text-medrun-masala">Not Specified
                        (129)</label>
                </div>
            </div>
        </div>



    </div>
</div>
