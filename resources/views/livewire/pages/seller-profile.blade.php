<div class="mb-6 mt-6 sm:mt-8 wrapper">
    <div class="">

        <!-- Seller Card -->
        <div
            class="bg-medrun-light flex-col xs:flex-row space-y-4 xs:space-y-0 flex justify-between border p-4 sm:p-6 mb-8 rounded-xl">
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


        <!-- Tabs & Search -->
        <div
            class="flex flex-col md:flex-row space-y-4 md:space-y-0 md:space-x-4 md:items-center md:justify-between mb-6 md:mb-10">
            <!-- Tabs -->
            <div>
                <ul class="flex items-center space-x-4 sm:space-x-6">
                    <li>
                        <!-- Active: font-medium border-medrun-blue -->
                        <button type="button"
                            class=" sm:text-2xl border-b border-medrun-blue pb-2 text-medrun-masala font-medium focus-visible:outline-none hover:text-medrun-sky transition duration-200">
                            Shop
                        </button>
                    </li>
                    <li>
                        <button type="button"
                            class=" sm:text-2xl border-b border-transparent pb-2 text-medrun-masala focus-visible:outline-none hover:text-medrun-sky transition duration-200">
                            About
                        </button>
                    </li>
                    <li>
                        <button type="button"
                            class=" sm:text-2xl border-b border-transparent pb-2 text-medrun-masala focus-visible:outline-none hover:text-medrun-sky transition duration-200">
                            Feedback
                        </button>
                    </li>
                </ul>
            </div>
            <!-- Search and category filter -->
            <div class="w-full md:max-w-xl">
                <div
                    class="relative border px-4 py-3 w-full rounded-xl bg-white flex items-center space-x-2 justify-between">
                    <div class="w-full flex space-x-2 items-center">
                        <x-icon.search class="w-4.5 h-4.5" />
                        <div class="w-full">
                            <label for="search-2" class="sr-only">Search</label>
                            <input type="text" id="search-2" name="search-2" placeholder="Search all 242 items"
                                class="border-0 text-sm w-full text-medrun-masala focus:placeholder:text-medrun-masala/50 leading-4 p-0 focus:ring-0">
                        </div>
                    </div>
                    <div class="flex-shrink-0">
                        <x-dropdown title="All Category">
                            <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                            <a href="#" class="text-medrun-masala block px-4 py-2 text-sm" role="menuitem"
                                tabindex="-1" id="menu-item-0">Analytical</a>
                            <a href="#" class="text-medrun-masala block px-4 py-2 text-sm" role="menuitem"
                                tabindex="-1" id="menu-item-1">Clinical</a>
                        </x-dropdown>
                    </div>
                </div>
            </div>
        </div>


        <!-- Featured Items -->
        <div class=" mb-8 sm:mb-16">
            <!-- Heading -->
            <x-section-heading title="Featured" focusText="Items" variant="flat">
            </x-section-heading>
            <!-- Products grid -->
            <div class="mt-6 grid gap-4 grid-cols-1 xs:grid-cols-2 lg:grid-cols-4 2xl:grid-cols-5">
                <x-product-card labelText="Refurbished" />
                <x-product-card labelText="Refurbished" />
                <x-product-card labelText="Open Box" labelColor="sky" />
                <x-product-card labelText="Refurbished" />
                <x-product-card labelText="Open Box" labelColor="sky" />
            </div>
        </div>

        <!-- All Items -->
        <div class=" mb-8">
            <!-- Heading -->
            <x-section-heading title="All" focusText="Items" variant="flat">
                <div class="flex items-center space-x-2">
                    <label class="text-sm font-medium text-medrun-masala" for="sortby">Sory By:</label>
                    <select
                        class="text-sm border border-medrun-blue leading-4 focus-visible:ring-0 transition duration-200 focus:border-medrun-sky text-medrun-masala rounded p-2 pr-8"
                        name="sortby" id="sortby">
                        <option value="1">Best Match</option>
                        <option value="1">Category</option>
                        <option value="1">Rating</option>
                        <option value="1">Best Match</option>
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
                    <a href="#" class="text-medrun-masala block px-4 py-2 text-sm" role="menuitem"
                        tabindex="-1" id="menu-item-0">Analytical</a>
                    <a href="#" class="text-medrun-masala block px-4 py-2 text-sm" role="menuitem"
                        tabindex="-1" id="menu-item-1">Clinical</a>
                </x-dropdown>
                <x-dropdown title="Filter-3">
                    <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                    <a href="#" class="text-medrun-masala block px-4 py-2 text-sm" role="menuitem"
                        tabindex="-1" id="menu-item-0">Analytical</a>
                    <a href="#" class="text-medrun-masala block px-4 py-2 text-sm" role="menuitem"
                        tabindex="-1" id="menu-item-1">Clinical</a>
                </x-dropdown>
            </div>
            <!-- Products grid -->
            <div class="mt-3 sm:mt-6 grid gap-4 grid-cols-1 xs:grid-cols-2 lg:grid-cols-4 2xl:grid-cols-5">
                <x-product-card labelText="Refurbished" />
                <x-product-card labelText="Open Box" labelColor="sky" />
                <x-product-card labelText="Refurbished" />
                <x-product-card labelText="Refurbished" />
                <x-product-card labelText="Open Box" labelColor="sky" />
            </div>
        </div>


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
        <div class="mb-8 sm:mb-16">
            <x-subscribe title="Sign Up for exclusive updates" />
        </div>

    </div>
</div>
