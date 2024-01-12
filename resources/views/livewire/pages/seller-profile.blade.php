<div class="mb-6 mt-6 sm:mt-8 wrapper">
    <div class="wrapper-sm">

        <!-- Seller Card -->
        <div class="bg-medrun-light flex-col xs:flex-row space-y-4 xs:space-y-0 flex justify-between border p-4 sm:p-6 mb-8 rounded-xl">
            <!-- Seller image -->
            <div class="flex items-center gap-x-6">
                <div class="hidden lg:block">
                    <img src="https://images.unsplash.com/photo-1545231027-637d2f6210f8?q=80&w=160&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        class="w-40 h-40 rounded-full object-cover object-center" alt="">
                </div>

                <div class="space-y-3">
                    <h2 class="text-lg sm:text-2xl font-semibold text-medrun-masala">Dash Distributers</h2>
                    <div class="flex items-center space-x-2">
                        <div class="text-medrun-yellow flex items-center">
                            <x-icon.star class="w-4 h-4 p-0.5" />
                            <x-icon.star class="w-4 h-4 p-0.5" />
                            <x-icon.star class="w-4 h-4 p-0.5" />
                            <x-icon.star class="w-4 h-4 p-0.5" />
                            <x-icon.star class="w-4 h-4 p-0.5" />
                        </div>
                        <span class="text-sm text-medrun-masala">24 reviews</span>
                    </div>
                    <p class="text-sm text-medrun-masala">36K items sold</p>

                    <div>
                        <button type="button"
                            class="bg-white p-3 rounded sm:p-4 font-medium hover:bg-medrun-yellow-light transition duration-200 text-medrun-masala text-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-medrun-yellow">
                            Articles
                        </button>
                        <button type="button"
                            class="bg-white p-3 rounded sm:p-4 font-medium hover:bg-medrun-yellow-light transition duration-200 text-medrun-masala text-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-medrun-yellow">
                            Catalogues
                        </button>
                    </div>
                </div>
            </div>

            <!-- Buttons -->
            <div class="w-full xs:max-w-28 lg:max-w-56 space-y-2">
                <button type="button"
                    class="bg-medrun-stone-light p-3 w-full rounded font-medium inline-flex items-center justify-center gap-x-2 hover:bg-medrun-stone transition duration-200 text-white text-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-medrun-stone-light">
                    <x-icon.phone class="w-4.5 h-4.5" />
                    Contact
                </button>
                <button type="button"
                    class="p-3 w-full rounded font-medium inline-flex items-center shadow-sm justify-center hover:bg-white gap-x-2 hover:text-medrun-blue-light transition duration-200 text-medrun-masala text-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-medrun-yellow-light">
                    <x-icon.heart class="w-4.5 h-4.5 text-medrun-blue" />
                    Save <span class="hidden lg:inline">this seller</span>
                </button>
            </div>
        </div>


        <!-- Featured Items -->
        <section class="wrapper-sm mb-8 sm:mb-16">
            <!-- Heading -->
            <x-section-heading title="Featured" focusText="Items">
                ...
            </x-section-heading>
            <!-- Products grid -->
            <div class="mt-6 grid gap-4 grid-cols-1 xs:grid-cols-2 lg:grid-cols-4">
                <x-product-card labelText="Refurbished" />
                <x-product-card labelText="Open Box" labelColor="sky" />
                <x-product-card labelText="Refurbished" />
                <x-product-card labelText="Open Box" labelColor="sky" />
            </div>
        </section>

        <!-- Subscribe -->
        <section class="mb-8 sm:mb-16">
            <x-subscribe title="Sign Up for exclusive updates" />
        </section>

    </div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
</div>
