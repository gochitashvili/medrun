<div {{ $attributes->merge(['class']) }}>
    <div class="mb-4">
        <h2 class="text-medrun-masala  font-semibold">Categories</h2>
    </div>
    <!-- Filters -->
    <div class="space-y-4 lg:space-y-6">

        <div class="space-y-6">
            <div>
                <ul role="list" class="text-sm text-medrun-masala mt-3.5">
                    <li x-data="{ open: true }"  :class="open ? 'mb-6' : 'mb-4'">
                        <button @click="open =! open"
                            class="flex focus-visible:outline-none w-full items-center font-medium text-sm text-medrun-blue-light justify-between hover:text-medrun-sky transition duration-200"
                            :class="open ? '' : 'border-b border-gray-200 pb-3.5'" type="button">
                            Analytical
                            <span>
                                <x-icon.chevron-down x-show="open" class="-mr-1 w-4.5 h-4.5" />
                                <x-icon.chevron-right x-show="!(open)" class="-mr-1 w-4.5 h-4.5" />
                            </span>
                        </button>
                        <div x-show="open" class="mt-4">
                            <ul class="space-y-4">
                                <li>
                                    <a href="#"
                                        class="text-medrun-masala text-xs hover:text-medrun-sky transition duration-200">
                                        Air Sampling
                                    </a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="text-medrun-masala text-xs hover:text-medrun-sky transition duration-200">
                                        Atomic Absorption
                                    </a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="text-medrun-masala text-xs hover:text-medrun-sky transition duration-200">
                                        Balances
                                    </a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="text-medrun-masala text-xs hover:text-medrun-sky transition duration-200">
                                        Calorimeter
                                    </a>
                                </li>
                            </ul>

                            <div x-data="{ open: false }" class="mt-6">
                                <h3 class="-my-3 flow-root">
                                    <button type="button" x-description="Expand/collapse section button"
                                        class="flex focus-visible:outline-none items-center text-medrun-masala text-sm justify-between hover:text-medrun-sky transition duration-200"
                                        aria-controls="filter-section-0" @click="open = !open" aria-expanded="false"
                                        x-bind:aria-expanded="open.toString()">
                                        <span>See more</span>
                                        <span class="ml-1 flex items-center">
                                            <x-icon.chevron-right x-show="open" class="-mr-1 w-4.5 h-4.5" />
                                            <x-icon.chevron-down x-show="!(open)" class="-mr-1 w-4.5 h-4.5" />
                                        </span>
                                    </button>
                                </h3>

                                <div x-show="open" class="mt-4">
                                    <ul class="space-y-4 mt-6">
                                        <li>
                                            <a href="#"
                                                class="text-medrun-masala text-xs hover:text-medrun-sky transition duration-200">
                                                Air Sampling
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="text-medrun-masala text-xs hover:text-medrun-sky transition duration-200">
                                                Air Sampling
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="text-medrun-masala text-xs hover:text-medrun-sky transition duration-200">
                                                Air Sampling
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="text-medrun-masala text-xs hover:text-medrun-sky transition duration-200">
                                                Air Sampling
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </li>
                    <li x-data="{ open: false }" :class="open ? 'mb-6' : 'mb-4'">
                        <button @click="open =! open"
                            class="flex focus-visible:outline-none w-full items-center font-medium text-sm text-medrun-blue-light justify-between hover:text-medrun-sky transition duration-200"
                            :class="open ? '' : 'border-b border-gray-200 pb-3.5'" type="button">
                            Clinical
                            <span>
                                <x-icon.chevron-down x-show="open" class="-mr-1 w-4.5 h-4.5" />
                                <x-icon.chevron-right x-show="!(open)" class="-mr-1 w-4.5 h-4.5" />
                            </span>
                        </button>
                        <div x-show="open" class="mt-4">
                            <ul class="space-y-4">
                                <li>
                                    <a href="#"
                                        class="text-medrun-masala text-xs hover:text-medrun-sky transition duration-200">
                                        Air Sampling
                                    </a>
                                </li>
                            </ul>

                            <div x-data="{ open: false }" class="mt-6">
                                <h3 class="-my-3 flow-root">
                                    <button type="button" x-description="Expand/collapse section button"
                                        class="flex focus-visible:outline-none w-full items-center text-medrun-masala text-sm justify-between hover:text-medrun-sky transition duration-200"
                                        aria-controls="filter-section-0" @click="open = !open" aria-expanded="false"
                                        x-bind:aria-expanded="open.toString()">
                                        <span>See more</span>
                                        <span class="ml-1 flex items-center">
                                            <x-icon.chevron-right x-show="open" class="-mr-1 w-4.5 h-4.5" />
                                            <x-icon.chevron-down x-show="!(open)" class="-mr-1 w-4.5 h-4.5" />
                                        </span>
                                    </button>
                                </h3>

                                <div x-show="open" class="mt-4">
                                    <ul class="space-y-4 mt-6">
                                        <li>
                                            <a href="#"
                                                class="text-medrun-masala text-xs hover:text-medrun-sky transition duration-200">
                                                Atomic Absorption
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </li>
                    <!-- More items -->
                </ul>
            </div>
        </div>
    </div>
</div>
