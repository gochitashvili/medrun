<header>
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

                <!-- Search -->
                <div class="relative flex flex-1 items-center justify-center">
                    <div class="w-full">
                        <label for="search" class="sr-only">Search Medrun</label>
                        <div class="flex rounded-xl">
                            <div class="relative flex flex-grow items-stretch focus-within:z-10">
                                <input type="text" name="search" id="search"
                                    class="block w-full rounded-none rounded-l-xl border-0 py-1.5 sm:py-3 px-4 text-gray-900 placeholder:text-gray-400 focus:ring-0 text-sm sm:leading-6"
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
        </div>
        <div class="bg-medrun-blue-light">
            <div class="wrapper py-4 flex items-center space-x-4 justify-between">
                <x-nav.button>
                    <x-icon.chevron-down class="-ml-1 w-4.5 h-4.5" />
                    All
                </x-nav.button>
                <nav class="flex space-x-4 items-center snap-x overflow-x-auto" aria-label="Global">
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
                <div class="flex-1 flex justify-end items-center ">
                    <x-nav.button>
                        <x-icon.chevron-right class="-mr-1 w-4.5 h-4.5" />
                    </x-nav.button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Mobile menu, show/hide based on menu state. -->
    <nav class="hidden" aria-label="Global" id="mobile-menu">
        <div class="space-y-1 px-2 pb-3 pt-2 text-black">
            Mobile Menu Links
        </div>
    </nav>

</header>
