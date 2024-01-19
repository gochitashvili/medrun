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
                    <x-page-heading title="Home" focusText="Articles" />
                    <div class="absolute top-1 lg:hidden right-0">
                        <button @click="open = !open" type="button"
                            class="focus-visible:ring-0 focus-visible:border-0">
                            <x-icon.filter class="w-6 h-6" />
                        </button>
                    </div>
                </div>
                <div class="mt-4 md:mt-6 grid gap-4 grid-cols-1 xs:grid-cols-2 md:grid-cols-3">
                    <x-article-card />
                    <x-article-card />
                    <x-article-card />
                    <x-article-card />
                    <x-article-card />
                    <x-article-card />
                </div>
            </div>

        </div>

        <!-- Subscribe -->
        <section class="mb-8 sm:mb-16">
            <x-subscribe title="Sign Up for exclusive updates" />
        </section>

    </div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
</div>
