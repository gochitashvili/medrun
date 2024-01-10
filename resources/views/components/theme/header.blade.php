<header x-data="{ open: false }" @keydown.window.escape="open = false">
    <!--
    Mobile menu

    Off-canvas menu for mobile, show/hide based on off-canvas menu state.
  -->
    <div x-show="open" class="relative z-40 " role="dialog" aria-modal="true">
        <!--
      Off-canvas menu backdrop, show/hide based on off-canvas menu state.

      Entering: "transition-opacity ease-linear duration-300"
        From: "opacity-0"
        To: "opacity-100"
      Leaving: "transition-opacity ease-linear duration-300"
        From: "opacity-100"
        To: "opacity-0"
    -->
        <div x-show="open" x-transition:enter="transition-opacity ease-linear duration-300"
            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
            x-transition:leave="transition-opacity ease-linear duration-300" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0" class="fixed inset-0 bg-black bg-opacity-25" style="display: none;">
        </div>

        <div class="fixed inset-0 z-40 flex">
            <!--
        Off-canvas menu, show/hide based on off-canvas menu state.

        Entering: "transition ease-in-out duration-300 transform"
          From: "-translate-x-full"
          To: "translate-x-0"
        Leaving: "transition ease-in-out duration-300 transform"
          From: "translate-x-0"
          To: "-translate-x-full"
      -->
            <div x-show="open" x-transition:enter="transition ease-in-out duration-300 transform"
                x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0"
                x-transition:leave="transition ease-in-out duration-300 transform"
                x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full"
                x-description="Off-canvas menu, show/hide based on off-canvas menu state."
                class="relative flex w-full max-w-xs flex-col overflow-y-auto bg-white pb-12 shadow-xl"
                @click.away="open = false" style="display: none;">

                <div class="flex items-center justify-between px-4 mb-4 pt-5">
                    <h3 class="text-xl lg:text-2xl font-semibold text-medrun-stone-light">Categories</h3>
                    <button type="button" @click="open = false"
                        class="-m-2 inline-flex items-center justify-center rounded-md p-2 text-gray-400">
                        <span class="sr-only">Close menu</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <div class="space-y-6 px-4">
                    <div>
                        <h3 class="bg-medrun-light text-medrun-stone py-2.5 px-4 rounded text-left text-lg font-medium">
                            Analytical</h3>
                        <ul role="list" class="space-y-4 text-sm text-medrun-masala mt-3.5">
                            <li class="border-b border-gray-200 pb-3.5">
                                <a class="flex items-center justify-between hover:text-medrun-sky transition duration-200"
                                    href="#">
                                    Air Sampling
                                    <x-icon.chevron-right class="-mr-1 w-4.5 h-4.5" />
                                </a>
                            </li>
                            <li class="border-b border-gray-200 pb-3.5">
                                <a class="flex items-center justify-between hover:text-medrun-sky transition duration-200"
                                    href="#">
                                    Atomic Absorption
                                    <x-icon.chevron-right class="-mr-1 w-4.5 h-4.5" />
                                </a>
                            </li>
                            <li class="border-b border-gray-200 pb-3.5">
                                <a class="flex items-center justify-between hover:text-medrun-sky transition duration-200"
                                    href="#">
                                    Balances
                                    <x-icon.chevron-right class="-mr-1 w-4.5 h-4.5" />
                                </a>
                            </li>
                            <li class="border-b border-gray-200 pb-3.5">
                                <a class="flex items-center justify-between hover:text-medrun-sky transition duration-200"
                                    href="#">
                                    Calorimeter
                                    <x-icon.chevron-right class="-mr-1 w-4.5 h-4.5" />
                                </a>
                            </li>
                        </ul>
                        <div x-data="{ open: false }" class="mt-3.5">
                            <h3 class="-my-3 flow-root">
                                <button type="button" x-description="Expand/collapse section button"
                                    class="flex w-full items-center pt-3.5 text-sm text-medrun-sky hover:text-medrun-masala transition duration-200"
                                    aria-controls="filter-section-0" @click="open = !open" aria-expanded="false"
                                    x-bind:aria-expanded="open.toString()">
                                    <span class="font-medium">See more</span>
                                    <span class="ml-1 flex items-center">
                                        <x-icon.chevron-right x-show="open" class="-mr-1 w-4.5 h-4.5" />
                                        <x-icon.chevron-down x-show="!(open)" class="-mr-1 w-4.5 h-4.5" />
                                    </span>
                                </button>
                            </h3>
                            <div class="pt-3.5" id="filter-section-0" x-show="open" style="display: none;">
                                <ul role="list" class="space-y-4  text-sm text-medrun-masala ">
                                    <li class="border-b border-gray-200 py-3.5">
                                        <a class="flex items-center justify-between hover:text-medrun-sky transition duration-200"
                                            href="#">
                                            More Category
                                            <x-icon.chevron-right class="-mr-1 w-4.5 h-4.5" />
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div>
                        <h3 class="bg-medrun-light text-medrun-stone py-2.5 px-4 rounded text-left text-lg font-medium">
                            Clinical</h3>
                        <ul role="list" class="space-y-4 text-sm text-medrun-masala mt-3.5">
                            <li class="border-b border-gray-200 pb-3.5">
                                <a class="flex items-center justify-between hover:text-medrun-sky transition duration-200"
                                    href="#">
                                    Air Sampling
                                    <x-icon.chevron-right class="-mr-1 w-4.5 h-4.5" />
                                </a>
                            </li>
                            <li class="border-b border-gray-200 pb-3.5">
                                <a class="flex items-center justify-between hover:text-medrun-sky transition duration-200"
                                    href="#">
                                    Atomic Absorption
                                    <x-icon.chevron-right class="-mr-1 w-4.5 h-4.5" />
                                </a>
                            </li>
                            <li class="border-b border-gray-200 pb-3.5">
                                <a class="flex items-center justify-between hover:text-medrun-sky transition duration-200"
                                    href="#">
                                    Balances
                                    <x-icon.chevron-right class="-mr-1 w-4.5 h-4.5" />
                                </a>
                            </li>
                            <li class="border-b border-gray-200 pb-3.5">
                                <a class="flex items-center justify-between hover:text-medrun-sky transition duration-200"
                                    href="#">
                                    Calorimeter
                                    <x-icon.chevron-right class="-mr-1 w-4.5 h-4.5" />
                                </a>
                            </li>
                        </ul>
                        <div x-data="{ open: false }" class="mt-3.5">
                            <h3 class="-my-3 flow-root">
                                <button type="button" x-description="Expand/collapse section button"
                                    class="flex w-full items-center pt-3.5 text-sm text-medrun-sky hover:text-medrun-masala transition duration-200"
                                    aria-controls="filter-section-0" @click="open = !open" aria-expanded="false"
                                    x-bind:aria-expanded="open.toString()">
                                    <span class="font-medium">See more</span>
                                    <span class="ml-1 flex items-center">
                                        <x-icon.chevron-right x-show="open" class="-mr-1 w-4.5 h-4.5" />
                                        <x-icon.chevron-down x-show="!(open)" class="-mr-1 w-4.5 h-4.5" />
                                    </span>
                                </button>
                            </h3>
                            <div class="pt-3.5" id="filter-section-0" x-show="open" style="display: none;">
                                <ul role="list" class="space-y-4  text-sm text-medrun-masala ">
                                    <li class="border-b border-gray-200 py-3.5">
                                        <a class="flex items-center justify-between hover:text-medrun-sky transition duration-200"
                                            href="#">
                                            More Category
                                            <x-icon.chevron-right class="-mr-1 w-4.5 h-4.5" />
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <div class="bg-medrun-blue pt-2 sm:pt-0">
        <div>
            <div class="wrapper py-4 relative flex gap-x-4 lg:gap-x-6 justify-between">
                <!-- Logo -->
                <div class="relative flex items-center">
                    <div class="flex flex-shrink-0 items-center">
                        <a href="#">
                            <img class="h-8 sm:h-12 w-auto hover:opacity-90 transition duration-200"
                                src="{{ asset('images/logo.svg') }}" alt="Medrun">
                        </a>
                    </div>
                </div>

                <!-- Desktop Search -->
                <div class="relative hidden md:flex flex-1 items-center justify-center">
                    <div class="w-full">
                        <label for="search" class="sr-only">Search Medrun</label>
                        <div class="flex rounded-xl">
                            <div class="relative flex flex-grow items-stretch focus-within:z-10">
                                <input type="text" name="search" id="search"
                                    class="block w-full rounded-none rounded-l-xl border-0 py-1.5 sm:py-3 px-4 text-medrun-masala placeholder:text-gray-400 focus:ring-0 text-sm sm:leading-6"
                                    placeholder="Search essentials, equipments and more...">
                            </div>
                            <button type="button"
                                class="relative inline-flex items-center rounded-r-xl px-3 py-1.5 sm:p-3.5 bg-medrun-sky focus:ring-0">
                                <x-icon.search class="h-4.5 w-4.5 text-medrun-light" />
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Header Links -->
                <div class="flex gap-x-3 lg:gap-x-4 items-center">
                    <a href="#"
                        class="group text-sm font-medium flex items-center gap-x-1 text-white hover:text-medrun-sky-light transition duration-200">
                        <x-icon.user
                            class="w-4.5 h-4.5 text-medrun-sky group-hover:text-medrun-sky-light transition duration-200" />
                        <span class="hidden lg:block">Sign up / Sign in</span>
                    </a>
                    <a href="#"
                        class="group text-sm font-medium flex items-center gap-x-1 text-white hover:text-medrun-sky-light transition duration-200">
                        <x-icon.sell
                            class="w-4.5 h-4.5 text-medrun-sky group-hover:text-medrun-sky-light transition duration-200" />
                        <span class="hidden lg:block">Start Selling</span>
                    </a>
                    <a href="#"
                        class="group text-sm font-medium flex items-center gap-x-1 text-white hover:text-medrun-sky-light transition duration-200">
                        <span class="text-medrun-sky group-hover:text-medrun-sky-light transition duration-200">
                            <x-icon.edit class="w-4.5 h-4.5" />
                        </span>
                        <span class="hidden lg:block">Write a review</span>
                    </a>
                </div>
            </div>
            <!-- Mobile Search -->
            <!-- Search -->
            <div class="wrapper block md:hidden mb-4">
                <div class="w-full">
                    <label for="mobile-search" class="sr-only">Search Medrun</label>
                    <div class="flex rounded-xl">
                        <div class="relative flex flex-grow items-stretch focus-within:z-10">
                            <input type="text" name="mobile-search" id="mobile-search"
                                class="block w-full rounded-none rounded-l-xl border-0 py-2 sm:py-3 px-4 text-medrun-masala placeholder:text-gray-400 focus:ring-0 text-sm leading-6"
                                placeholder="Search essentials, equipments and more...">
                        </div>
                        <button type="button"
                            class="relative inline-flex items-center rounded-r-xl px-3 py-1.5 sm:p-3.5 bg-medrun-sky focus:ring-0">
                            <x-icon.search class="h-4.5 w-4.5 text-medrun-light" />
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-medrun-blue-light">
            <div class="wrapper py-4 flex items-center gap-x-4 justify-between">
                <x-nav.button @click="open = true" class="lg:hidden">
                    <x-icon.chevron-down class="-ml-1 w-4.5 h-4.5" />
                    All
                </x-nav.button>
                <nav class="flex space-x-4 items-center snap-x overflow-x-auto scrollbar-none" aria-label="Global">
                    <!-- View All Button -->
                    <x-nav.link href="/">Analytical</x-nav.link>
                    <x-nav.link href="/">Clinical</x-nav.link>
                    <x-nav.link href="/">Life Science</x-nav.link>
                    <x-nav.link href="/">Research News</x-nav.link>
                    <x-nav.link href="/">Lab Products</x-nav.link>
                    <x-nav.link href="/">Automation</x-nav.link>
                    <x-nav.link href="/">Software</x-nav.link>
                    <x-nav.link href="/">Cell Culture</x-nav.link>
                    <x-nav.link href="/">Reagents</x-nav.link>
                    <x-nav.link href="/">Articles</x-nav.link>
                    <x-nav.link href="/">Service Providers</x-nav.link>
                </nav>

                <!-- View All button - Second -->
                <div class="flex-1 flex justify-end items-center lg:hidden">
                    <x-nav.button @click="open = true">
                        <x-icon.chevron-right class="-mr-1 w-4.5 h-4.5" />
                    </x-nav.button>
                </div>
            </div>
        </div>
    </div>

</header>
