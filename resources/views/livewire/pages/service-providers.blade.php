<div x-data="{ open: false }" class="mb-6 mt-6 sm:mt-8 wrapper">
    <!--
    Mobile menu

    Off-canvas menu for mobile, show/hide based on off-canvas menu state.
  -->
    <div x-show="open" class="relative z-40 lg:hidden " role="dialog" aria-modal="true">
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

                <div class="flex items-center justify-end px-4 pt-5">
                    <button type="button" @click="open = false"
                        class="-m-2 inline-flex items-center justify-center rounded-md p-2 text-gray-400">
                        <span class="sr-only">Close menu</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <x-filter-articles class="block lg:hidden px-4" />
            </div>
        </div>
    </div>
    <div class="wrapper-sm">
        <div class="grid gap-4 grid-cols-12 mb-8 sm:mb-16">
            <!-- Filters -->
            <div class="hidden lg:block lg:col-span-3 p-3 lg:p-4 border rounded-xl bg-white">
                <x-filter-articles class="hidden lg:block" />
            </div>

            <div class="col-span-12 lg:col-span-9">
                <!-- Heading -->
                <div class="relative">
                    <x-page-heading title="Home" focusText="Service Providers" />
                    <div class="absolute top-1 lg:hidden right-0">
                        <button @click="open = !open" type="button"
                            class="focus-visible:ring-0 focus-visible:border-0">
                            <x-icon.filter class="w-6 h-6" />
                        </button>
                    </div>
                </div>

                <div
                    class="bg-medrun-light mt-4 flex-col lg:flex-row space-y-4 lg:space-y-0 lg:space-x-4 flex items-center lg:items-start lg:justify-between border p-4 lg:p-6 mb-8 rounded-xl">
                    <!-- Service image -->
                    <div class="flex flex-col gap-y-6 lg:gap-y-0 lg:flex-row items-center lg:gap-x-6">
                        <div class="space-y-3 sm:text-center lg:text-left">
                            <h2 class="text-lg sm:text-2xl font-semibold text-medrun-masala">Equipment Service Providers
                            </h2>
                            <p class="text-sm text-medrun-masala">Looking for lab equipment service or support? Medrun
                                will connect you with professional companies to match your needs.</p>
                        </div>
                    </div>

                    <!-- Button -->
                    <div class="w-full sm:max-w-max lg:max-w-72 space-y-2 flex-shrink-0">
                        <button type="button"
                            class="bg-medrun-stone-light p-4 w-full capitalize rounded-md font-medium inline-flex items-center justify-center gap-x-2 hover:bg-medrun-stone transition duration-200 text-white text-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-medrun-stone-light">
                            <x-icon.doc class="w-4.5 h-4.5" />
                            Request Equipment Support
                        </button>
                    </div>
                </div>

                <div class="mt-4 md:mt-6 grid gap-4 grid-cols-1 xs:grid-cols-2 md:grid-cols-3">
                    <x-service-card />
                    <x-service-card />
                    <x-service-card />
                    <x-service-card />
                    <x-service-card />
                    <x-service-card />
                </div>
            </div>
        </div>


        <!-- All Service Providers -->
        <section class="mb-8">
            <!-- Heading -->
            <x-section-heading title="All" focusText="Service Providers" variant="flat">
                <div class="flex items-center space-x-2">
                    <label class="text-sm font-medium text-medrun-masala" for="sortby">Sory By:</label>
                    <select
                        class="text-sm border border-medrun-blue leading-4 focus-visible:ring-0 transition duration-200 focus:border-medrun-sky text-medrun-masala rounded p-2 pr-8"
                        name="sortby" id="sortby">
                        <option value="1">Category</option>
                        <option value="1">Names</option>
                        <option value="1">Rating</option>
                        <option value="1">Best</option>
                    </select>
                </div>
            </x-section-heading>


            <div class="mt-3 sm:mt-6 space-x-4">
                <x-dropdown title="Filter-1">
                    <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                    <a href="#" class="text-medrun-masala block px-4 py-2 text-sm" role="menuitem" tabindex="-1"
                        id="menu-item-0">Analytical</a>
                    <a href="#" class="text-medrun-masala block px-4 py-2 text-sm" role="menuitem" tabindex="-1"
                        id="menu-item-1">Clinical</a>
                </x-dropdown>
                <x-dropdown title="Filter-2">
                    <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                    <a href="#" class="text-medrun-masala block px-4 py-2 text-sm" role="menuitem" tabindex="-1"
                        id="menu-item-0">Analytical</a>
                    <a href="#" class="text-medrun-masala block px-4 py-2 text-sm" role="menuitem" tabindex="-1"
                        id="menu-item-1">Clinical</a>
                </x-dropdown>
                <x-dropdown title="Filter-3">
                    <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                    <a href="#" class="text-medrun-masala block px-4 py-2 text-sm" role="menuitem"
                        tabindex="-1" id="menu-item-0">Analytical</a>
                    <a href="#" class="text-medrun-masala block px-4 py-2 text-sm" role="menuitem"
                        tabindex="-1" id="menu-item-1">Clinical</a>
                </x-dropdown>
            </div>

            <!-- Service grid -->
            <div class="mt-3 sm:mt-6 grid gap-4 grid-cols-1 md:grid-cols-2">
                <x-service-provider-card promoted />
                <x-service-provider-card promoted />
                <x-service-provider-card promoted />
                <x-service-provider-card promoted />
            </div>

            <div class="mt-3 sm:mt-6 grid gap-4 grid-cols-1 md:grid-cols-2">
                <x-service-provider-card variant="simple" />
                <x-service-provider-card variant="simple" />
                <x-service-provider-card variant="simple" />
                <x-service-provider-card variant="simple" />
                <x-service-provider-card variant="simple" />
                <x-service-provider-card variant="simple" />
                <x-service-provider-card variant="simple" />
                <x-service-provider-card variant="simple" />
            </div>
        </section>

        <!-- Pagination -->
        <div class="mb-8 sm:mb-16 flex justify-center">
            <nav class="isolate inline-flex gap-x-2" aria-label="Pagination">
                <a href="#"
                    class="relative inline-flex items-center rounded-lg p-1.5 text-medrun-masala ring-inset ring-medrun-blue transition duration-200 hover:text-medrun-blue hover:ring-1 focus:z-20 focus:outline-offset-0">
                    <span class="sr-only">Previous</span>
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.5 5.25L6.75 9L10.5 12.75L10.5 5.25Z" fill="currentColor" />
                    </svg>
                </a>
                <!-- Current: "z-10 bg-indigo-600 text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600", Default: "text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:outline-offset-0" -->
                <a href="#"
                    class="relative inline-flex items-center rounded-lg px-3 py-1.5 text-sm font-medium text-medrun-blue ring-1 ring-inset ring-medrun-blue transition duration-200 focus:z-20 focus:outline-offset-0">1</a>
                <a href="#"
                    class="relative inline-flex items-center rounded-lg px-3 py-1.5 text-sm font-medium text-gray-400 ring-1 ring-inset ring-gray-200 transition duration-200 hover:text-medrun-blue hover:ring-medrun-blue focus:z-20 focus:outline-offset-0">2</a>
                <a href="#"
                    class="relative inline-flex items-center rounded-lg px-3 py-1.5 text-sm font-medium text-gray-400 ring-1 ring-inset ring-gray-200 transition duration-200 hover:text-medrun-blue hover:ring-medrun-blue focus:z-20 focus:outline-offset-0">3</a>
                <a href="#"
                    class="relative inline-flex items-center rounded-lg p-1.5 text-medrun-masala ring-inset ring-medrun-blue transition duration-200 hover:text-medrun-blue hover:ring-1 focus:z-20 focus:outline-offset-0">
                    <span class="sr-only">Previous</span>
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M7.5 5.25L11.25 9L7.5 12.75L7.5 5.25Z" fill="currentColor" />
                    </svg>
                </a>
            </nav>
        </div>

        <!-- Subscribe -->
        <section class="mb-8 sm:mb-16">
            <x-subscribe title="Sign Up for exclusive updates" />
        </section>

    </div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
</div>
