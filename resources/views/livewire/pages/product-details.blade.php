<div class="mb-6 mt-6 sm:mt-8 wrapper">
    <div class="wrapper-sm">

        <!-- Product details -->
        <div class="mb-8 sm:mb-16">
            <!-- Heading -->
            <div class="relative mb-8">
                <x-page-heading title="Home" focusText="Analytical" />
            </div>

            <!-- Product -->
            <div class="flex flex-col space-y-4 md:flex-row md:space-x-6">
                <!-- Images -->
                <div
                    class="flex-shrink-0 mx-auto rounded-xl border p-4 md:p-6 bg-white flex flex-col sm:flex-row items-center sm:items-stretch sm:space-x-5">
                    <!-- Thumbinails -->
                    <div
                        class="relative order-last mt-3 sm:mt-0 sm:order-first flex justify-between sm:space-y-3 flex-col">
                        <div class="space-x-2 sm:space-x-0 sm:space-y-3 flex sm:flex-col items-center">
                            <div
                                class="p-1.5 sm:p-3 flex items-center hover:cursor-pointer justify-center rounded-md sm:rounded-xl bg-white border border-medrun-masala hover:border-medrun-masala transition duration-200">
                                <img class="object-cover object-center" src="https://placehold.co/54x54" alt="thumb-1">
                            </div>
                            <div
                                class="p-1.5 sm:p-3 flex items-center hover:cursor-pointer justify-center rounded-md sm:rounded-xl bg-white border hover:border-medrun-masala transition duration-200">
                                <img class="object-cover object-center" src="https://placehold.co/54x54" alt="thumb-1">
                            </div>
                        </div>

                        <!-- Swich -->
                        <div class="flex justify-center sm:justify-start space-x-2 items-center mt-2 sm:mt-0">
                            <!-- Active: w-1.5 sm:w-4.5 Not active: w-1.5 sm:w-2 opacity-20 -->
                            <span class="block w-3 h-1.5 sm:w-4.5 sm:h-2 bg-medrun-masala rounded-full"></span>
                            <span
                                class="block w-1.5 h-1.5 sm:w-2 sm:h-2 bg-medrun-masala opacity-20 rounded-full"></span>
                        </div>

                    </div>
                    <!-- Main Photo -->
                    <div>
                        <img class="w-64 rounded-xl aspect-square" src="https://placehold.co/240x240" alt="">
                    </div>
                </div>

                <!-- Product info -->
                <div>
                    <!-- Brand & Model -->
                    <div class="mb-3">
                        <div class="text-sm leading-4 text-medrun-masala">
                            <strong class="font-medium">Brand:</strong> Manufacturer-2 | <strong
                                class="font-medium">Model:</strong> Model-3
                        </div>
                    </div>
                    <!-- Product Title -->
                    <h3 class="mb-3 sm:text-lg leading-6 font-bold text-medrun-masala">
                        Lot of 2 Getac F110 G2 i5-5200u 4GB RAM Rugged Tablets | As-Is Boots to BIOS
                    </h3>

                    <!-- Reviews -->
                    <div class="flex space-x-2 items-center mb-3">
                        <!-- Stars -->
                        <div class="flex space-x-1 text-medrun-yellow">
                            <x-icon.star class="w-3 h-3" />
                            <x-icon.star class="w-3 h-3" />
                            <x-icon.star class="w-3 h-3" />
                            <x-icon.star class="w-3 h-3" />
                        </div>
                        <span class="text-sm text-medrun-masala leading-4">24 reviews</span>
                    </div>

                    <!-- Condition -->
                    <div class="mb-3">
                        <div class="text-sm leading-5 text-medrun-masala flex items-center space-x-2">
                            <strong class="text-medium mr-1">Condition:</strong> Open Box
                        </div>
                        <small class="text-xs text-medrun-masala leading-5">Lot of 2 Getac F110 G2 i5-5200u 4GB RAM
                            Rugged Tablets | As-Is Boots to BIOS</small>
                    </div>

                    <!-- Quantity -->
                    <div class="space-x-1 mb-3">
                        <span class="text-medrun-masala font-medium leading-5">Quantity:</span>
                        <input type="text" name="quantity" id="quantity" placeholder="1"
                            class="max-w-9 p-2 rounded border placeholder:text-medrun-masala/50 text-sm leading-4 hover:text-medrun-masala focus:ring-medrun-masala/50 hover:border-transparent text-medrun-stone border-medrun-blue text-center">
                        <small class="text-xs leading-5 text-medrun-masala">More than 30 available / 744 sold</small>
                    </div>

                    <!-- Prices & Share -->
                    <div class="flex items-center justify-between mb-3">
                        <!-- Prices -->
                        <div>
                            <h4 class="text-2xl leading-7 text-medrun-masala font-semibold mb-3">USD $2,950.00</h4>
                            <div>
                                <small class="text-xs text-medrun-masala">Was: $3,000.00</small>
                                <span class="text-sm font-medium text-medrun-masala">Save: $50.00</span>
                            </div>
                        </div>

                        <!-- Share-->
                        <div>
                            <div class="flex items-center space-x-4 mb-4">
                                <a class="text-medrun-masala hover:text-medrun-sky transition duration-200"
                                    href="#">
                                    <x-icon.share class="w-6 h-6" />
                                </a>
                                <a class="text-medrun-masala hover:text-medrun-sky transition duration-200"
                                    href="#">
                                    <x-icon.heart-outline class="w-6 h-6" />
                                </a>
                            </div>
                            <p class="text-medrun-masala text-sm leading-4">Shipped from USA</p </div>
                        </div>

                    </div>

                    <!-- Buttons -->
                    <div class="flex space-x-2 sm:space-x-4 mb-3">
                        <button type="button"
                            class="bg-medrun-blue-light hove rounded-md border hover:bg-medrun-blue-light/90 transition duration-200 border-medrun-blue-light focus-visible:outline-none text-sm text-white font-semibold capitalize leading-5 py-3 w-full px-4">Buy
                            Now</button>
                        <button type="button"
                            class="bg-white hove rounded-md border hover:bg-gray-50/50 transition duration-200 border-medrun-blue focus-visible:outline-none text-sm text-medrun-masala font-semibold capitalize leading-5 py-3 w-full px-4">Add
                            to cart</button>
                    </div>

                    <!-- Sell Now -->
                    <div class="flex items-center justify-between">
                        <p class="text-medrun-masala text-sm leading-5">Have one to sell?</p>
                        <a class="text-medrun-blue hover:text-medrun-sky transition duration-200 text-sm font-semibold leading-5"
                            href="#">Sell Now</a>
                    </div>

                </div>

                <!-- Shipping & Payments -->
                <div class="hidden xl:block max-w-72 rounded-xl border p-4 md:p-6 bg-white">
                    <div class="mb-4">
                        <h5 class="font-semibold text-medrun-masala leading-5 mb-2">Shipping:</h5>
                        <p class="text-sm leading-4 text-medrun-masala ">
                            $20 Flat Fee | <a class="underline hover:text-medrun-sky transition duration-200"
                                href="#">See details</a> <br>
                            Located In Raynorport, USA.
                        </p>
                    </div>
                    <div class="mb-4">
                        <h5 class="font-semibold text-medrun-masala leading-5 mb-2">Returns:</h5>
                        <p class="text-sm leading-4 text-medrun-masala ">
                            Seller accept returns | <a class="underline hover:text-medrun-sky transition duration-200"
                                href="#">See details</a>.
                        </p>
                    </div>
                    <div class="mb-4">
                        <h5 class="font-semibold text-medrun-masala leading-5 mb-2">Payment:</h5>
                        <div class="grid grid-cols-3">
                            <img src="{{ asset('images/payments/PayPal.svg') }}" alt="paypal">
                            <img src="{{ asset('images/payments/Gpay.svg') }}" alt="Gpay">
                            <img src="{{ asset('images/payments/Visa.svg') }}" alt="Visa">
                            <img src="{{ asset('images/payments/MasterCard.svg') }}" alt="MasterCard">
                            <img src="{{ asset('images/payments/Amex.svg') }}" alt="Amex">
                            <img src="{{ asset('images/payments/Discovery.svg') }}" alt="Discovery">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Influenced -->
        <section class="mb-8 sm:mb-16">
            <div>
                <!-- Heading -->
                <x-section-heading title="Influenced by recent sponsored views" variant="simple" viewMore="#" />
                <!-- Products grid -->
                <div class="mt-6 grid gap-4 grid-cols-1 xs:grid-cols-2 lg:grid-cols-4">
                    <x-product-card labelText="Refurbished" />
                    <x-product-card labelText="Open Box" labelColor="sky" />
                    <x-product-card labelText="Refurbished" />
                    <x-product-card labelText="Open Box" labelColor="sky" />
                </div>
            </div>
        </section>

        <section class="mb-8 sm:mb-16">
            <div class="rounded-xl border p-4 md:p-6 bg-white" x-data="{ activeTab: 0 }">
                <div class="flex border-b mb-3 md:mb-4 space-x-3 md:space-x-4">
                    <label @click="activeTab = 0"
                        class="text-xs xs:text-sm lg:text-2xl  leading-7 text-medrun-masala pb-3"
                        :class="{ ' font-medium border-b border-medrun-blue': activeTab === 0 }">About this item</label>
                    <label @click="activeTab = 1"
                        class="text-xs xs:text-sm lg:text-2xl leading-7  text-medrun-masala pb-3 w-24 sm:w-auto truncate"
                        :class="{ ' font-medium border-b border-medrun-blue': activeTab === 1 }">Shipping & returns &
                        payments</label>
                    <label @click="activeTab = 2"
                        class="text-xs xs:text-sm lg:text-2xl leading-7 text-medrun-masala pb-3"
                        :class="{ ' font-medium border-b border-medrun-blue': activeTab === 2 }">Service
                        Providers</label>
                </div>

                <div class="tab-panel" :class="{ 'active': activeTab === 0 }"
                    x-show.transition.in.opacity.duration.600="activeTab === 0">
                    <p class="text-sm leading-4 text-medrun-masala mb-4">Seller assumes all responsibility for this
                        listing.</p>
                    <div class="space-y-4">
                        <div>
                            <div class="text-medrun-masala font-semibold leading-5 mb-3">Item Specifics:</div>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-2 md:gap-6">
                                <!-- Item Specifics -->
                                <div class="col-span-2">
                                    <ul class="space-y-2">
                                        <li class="text-medrun-masala text-xs leading-5">
                                            <strong class="font-medium text-sm">Notes:</strong>
                                            Lot of 2 Getac F110 G2 i5-5200u 4GB RAM Rugged Tablets | As-Is Boots to BIOS
                                        </li>
                                        <li class="text-medrun-masala text-sm leading-5">
                                            <strong class="font-medium ">Condition:</strong>
                                            Open Box
                                        </li>
                                        <li class="text-medrun-masala text-sm leading-5">
                                            <strong class="font-medium">Model:</strong>
                                            Forerunner 35
                                        </li>
                                        <li class="text-medrun-masala text-sm leading-5">
                                            <strong class="font-medium">Color:</strong>
                                            Black
                                        </li>
                                        <li class="text-medrun-masala text-sm leading-5">
                                            <strong class="font-medium">Activity:</strong>
                                            Running and jogging
                                        </li>
                                        <li class="text-medrun-masala text-sm leading-5">
                                            <strong class="font-medium">Features:</strong>
                                            Alarm, Average Speed, Calorie Monitor, Clock, Compass, Data Review, GPS,
                                            Pedometer
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-span-1">
                                    <ul class="space-y-2">
                                        <li class="text-medrun-masala text-xs leading-5">
                                            <strong class="font-medium text-sm">Country/Region of Manufacture:</strong>
                                            Taiwan
                                        </li>
                                        <li class="text-medrun-masala text-xs leading-5">
                                            <strong class="font-medium text-sm">Custom Bundle</strong>
                                            Bundle No
                                        </li>
                                        <li class="text-medrun-masala text-xs leading-5">
                                            <strong class="font-medium text-sm">Brand:</strong>
                                            Garmin
                                        </li>
                                        <li class="text-medrun-masala text-xs leading-5">
                                            <strong class="font-medium text-sm">MPC:</strong>
                                            010-01689-00
                                        </li>
                                        <li class="text-medrun-masala text-xs leading-5">
                                            <strong class="font-medium text-sm">UPC:</strong>
                                            010-01689-00
                                        </li>
                                        <li class="text-medrun-masala text-xs leading-5">
                                            <strong class="font-medium text-sm">Modified item:</strong>
                                            No
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="text-medrun-masala font-semibold text-xl leading-6 mb-3 ">Item description for
                                the seller</div>
                            <div class="text-medrun-masala font-semibold leading-5 mb-3 border-b inline-block pb-3">
                                Return policy:</div>
                            <div class="flex flex-col md:flex-row space-y-2 md:space-y-0 md:space-x-6 justify-between">

                                <div class="space-y-3 text-medrun-masala">
                                    <p class="font-medium leading-5 ">After receiving the item, contact seller within
                                    </p>
                                    <p class="text-xs leading-5">Accepted within 30 days with Standard International
                                        Shipping</p>
                                    <p class="text-xs leading-5">Accepted within 30 days if sent through Dummy
                                        International Shipping</p>
                                </div>

                                <div class="space-y-3 text-medrun-masala">
                                    <p class="font-medium leading-5 ">Refund will be given as</p>
                                    <p class="text-xs leading-5">Money back</p>
                                    <p class="text-xs leading-5">Money back</p>
                                </div>

                                <div class="space-y-3 text-medrun-masala">
                                    <p class="font-medium leading-5 ">Return Shipping</p>
                                    <p class="text-xs leading-5">Buyer pays for return shipping</p>
                                    <p class="text-xs leading-5">Buyer pays for return shipping</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-panel" :class="{ 'active': activeTab === 1 }"
                    x-show.transition.in.opacity.duration.600="activeTab === 1">
                    <p class="text-sm leading-4 text-medrun-masala mb-4">Seller assumes all responsibility for this
                        listing.</p>
                    <div class="space-y-4">
                        <div>
                            <div class="text-medrun-masala font-semibold leading-5 mb-3">Shipping and handling:</div>
                            <div>
                                <ul class="space-y-2">
                                    <li class="text-medrun-masala text-xs leading-5">
                                        <strong class="font-medium text-sm">Item location:</strong>
                                        Haltom City, Texas, United States
                                    </li>
                                    <li class="text-medrun-masala text-sm leading-5">
                                        <strong class="font-medium ">Ships to:</strong>
                                        Worldwide
                                    </li>
                                    <li class="text-medrun-masala text-sm leading-5">
                                        <strong class="font-medium">Excludes: </strong>
                                        APO/FPO, Afghanistan, Argentina, Barbados, Brazil, Cambodia, Colombia, Egypt,
                                        French Guiana, French Polynesia, Guadeloupe, India, Indonesia, Israel, Laos,
                                        Libya, Martinique, Mexico, Middle East, New Caledonia, Peru, Reunion, Russian
                                        Federation, Ukraine, Venezuela, Vietnam
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Quantity -->
                        <div class="flex flex-col sm:flex-row space-y-3 sm:space-y-0 justify-between sm:items-center">
                            <div class="flex space-x-4 justify-between">
                                <div
                                    class="flex flex-col space-y-1 sm:space-y-0 sm:flex-row sm:items-center sm:space-x-2">
                                    <span
                                        class="text-medrun-masala text-sm sm:text-base font-medium leading-5">Quantity:</span>
                                    <input type="text" name="quantity" id="quantity" placeholder="1"
                                        class="max-w-9 p-2 rounded border placeholder:text-medrun-masala/50 text-sm leading-4 hover:text-medrun-masala focus:ring-medrun-masala/50 hover:border-transparent text-medrun-stone border-medrun-blue text-center">
                                </div>

                                <div
                                    class="flex flex-col space-y-1 sm:space-y-0 sm:flex-row sm:items-center sm:space-x-2">
                                    <label class="text-medrun-masala text-sm sm:text-base font-medium leading-5"
                                        for="sortby">Change country:</label>
                                    <select
                                        class="text-sm border border-medrun-blue leading-4 focus-visible:ring-0 transition duration-200 focus:border-medrun-sky text-medrun-masala rounded p-2 pr-8"
                                        name="sortby" id="sortby">
                                        <option value="1">Australia</option>
                                        <option value="1">Category</option>
                                        <option value="1">Rating</option>
                                        <option value="1">Best Match</option>
                                    </select>
                                </div>
                            </div>
                            <div>
                                <button
                                    class="text-sm leading-4 font-medium text-medrun-masala hover:bg-gray-50 p-2 rounded focus-visible:outline-none border border-medrun-masala bg-gray-100">Get
                                    Rates</button>
                            </div>
                        </div>

                        <div>
                            <div
                                class="flex flex-col md:flex-row space-y-2 md:space-y-0 md:space-x-6 justify-between mb-4">

                                <div class="space-y-3 text-medrun-masala">
                                    <p class="font-medium leading-5 ">Shipping and handling
                                    </p>
                                    <p class="text-xs leading-5">US $100.00</p>
                                    <p class="text-xs leading-5">US $85.04</p>
                                </div>

                                <div class="space-y-3 text-medrun-masala">
                                    <p class="font-medium leading-5 ">Each additional item</p>
                                    <p class="text-xs leading-5">US $100.00</p>
                                    <p class="text-xs leading-5">Money back</p>
                                </div>

                                <div class="space-y-3 text-medrun-masala">
                                    <p class="font-medium leading-5 ">To</p>
                                    <p class="text-xs leading-5">Australia</p>
                                    <p class="text-xs leading-5">Australia</p>
                                </div>

                                <div class="space-y-3 text-medrun-masala">
                                    <p class="font-medium leading-5 ">Service</p>
                                    <p class="text-xs leading-5">Standard International Shipping</p>
                                    <p class="text-xs leading-5">Standard International Shipping</p>
                                </div>


                                <div class="space-y-3 text-medrun-masala">
                                    <p class="font-medium leading-5 ">Delivery</p>
                                    <div class="leading-5 mb-3">
                                        <p class="text-sm ">Estimated between Tue, Jan 16 and Wed, Feb 14 to
                                            75230</p>

                                        <p class="text-xs ">Seller ships within 1 day after <a
                                                class="underline text-medrun-blue-light" href="#">receiving
                                                cleared payment.</a></p>

                                    </div>
                                    <div class="leading-5">
                                        <p class="text-sm ">Estimated between Tue, Jan 16 and Wed, Feb 14 to
                                            75230</p>

                                        <p class="text-xs ">Seller ships within 1 day after <a
                                                class="underline text-medrun-blue-light" href="#">receiving
                                                cleared payment.</a></p>

                                    </div>
                                </div>
                            </div>

                            <p class="text-sm text-medrun-masala leading-4 mb-4">Estimated delivery dates- opens in a
                                new window or tab include seller's handling time,
                                origin ZIP Code, destination ZIP Code and time of acceptance and will depend on shipping
                                service selected and receipt of cleared payment. Delivery times may vary, especially
                                during peak periods</p>
                            <p class="text-medrun-masala leading-5">
                                <strong class="font-medium">
                                    Handling time:
                                </strong>
                                Will usually ship within 1 business day of receiving cleared payment.
                            </p>
                        </div>
                        <div class="mb-4">
                            <h5 class="font-semibold text-medrun-masala leading-5 mb-2">Payment methods:</h5>
                            <div class="grid grid-cols-5 xs:flex -mx-1">
                                <img class="w-14 h-auto" src="https://medrun.test/images/payments/PayPal.svg"
                                    alt="paypal">
                                <img class="w-14 h-auto" src="https://medrun.test/images/payments/Gpay.svg"
                                    alt="Gpay">
                                <img class="w-14 h-auto" src="https://medrun.test/images/payments/Visa.svg"
                                    alt="Visa">
                                <img class="w-14 h-auto" src="https://medrun.test/images/payments/MasterCard.svg"
                                    alt="MasterCard">
                                <img class="w-14 h-auto" src="https://medrun.test/images/payments/Amex.svg"
                                    alt="Amex">
                                <img class="w-14 h-auto" src="https://medrun.test/images/payments/Discovery.svg"
                                    alt="Discovery">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-panel" :class="{ 'active': activeTab === 2 }"
                    x-show.transition.in.opacity.duration.600="activeTab === 2">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 lg:gap-8">
                        <div class="space-y-4">
                            @php
                                $serviceProvidersCount = 4;
                            @endphp
                            @for ($i = 0; $i < $serviceProvidersCount; $i++)
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center gap-x-2">
                                        <img class="rounded-full hidden sm:block w-12 h-12 object-cover object-center flex-shrink-0"
                                            src="https://placehold.co/48x48" alt="img">
                                        <div>
                                            <h5
                                                class="text-sm leading-5 font-medium sm:text-base text-medrun-masala mb-1">
                                                Service Provider-1</h5>
                                            <span class="inline-flex gap-x-1 items-center text-sm leading-4">
                                                <x-icon.location class="text-medrun-blue w-4.5 h-4.5" />
                                                Location
                                            </span>
                                        </div>
                                    </div>
                                    <div>
                                        <button
                                            class="inline-flex gap-x-2 sm:gap-x-3 p-3 sm:p-4 rounded border hover:bg-gray-50 focus-visible:outline-none items-center text-xs sm:text-sm leading-4 font-medium text-medrun-masala">
                                            <x-icon.list class="w-4 h-4 sm:w-4.5 sm:h-4.5 text-medrun-blue" />
                                            Request a Quote
                                        </button>
                                    </div>
                                </div>
                            @endfor
                        </div>

                        <div class="hidden lg:block space-y-4">
                            @php
                                $serviceProvidersCount = 4;
                            @endphp
                            @for ($i = 0; $i < $serviceProvidersCount; $i++)
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center gap-x-2">
                                        <img class="rounded-full hidden sm:block w-12 h-12 object-cover object-center flex-shrink-0"
                                            src="https://placehold.co/48x48" alt="img">
                                        <div>
                                            <h5
                                                class="text-sm leading-5 font-medium sm:text-base text-medrun-masala mb-1">
                                                Service Provider-1</h5>
                                            <span class="inline-flex gap-x-1 items-center text-sm leading-4">
                                                <x-icon.location class="text-medrun-blue w-4.5 h-4.5" />
                                                Location
                                            </span>
                                        </div>
                                    </div>
                                    <div>
                                        <button
                                            class="inline-flex gap-x-2 sm:gap-x-3 p-3 sm:p-4 rounded border hover:bg-gray-50 focus-visible:outline-none items-center text-xs sm:text-sm leading-4 font-medium text-medrun-masala">
                                            <x-icon.list class="w-4 h-4 sm:w-4.5 sm:h-4.5 text-medrun-blue" />
                                            Request a Quote
                                        </button>
                                    </div>
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="mb-8 sm:mb-16">
            <!-- Seller Card -->
            <div class="bg-white  border p-4 sm:p-6 mb-8 rounded-xl">

                <div class="flex-col xs:flex-row space-y-4 xs:space-y-0 flex justify-between">
                    <!-- Seller image -->
                    <div class="flex items-center gap-x-6">
                        <div class="hidden lg:block">
                            <img src="https://images.unsplash.com/photo-1545231027-637d2f6210f8?q=80&w=160&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                class="w-40 h-40 rounded-full object-cover object-center" alt="">
                        </div>

                        <div class="space-y-3">
                            <h2 class="text-lg sm:text-2xl font-semibold text-medrun-masala">Dash Distributers</h2>
                            <div class="flex items-center space-x-2">
                                <div class="text-medrun-blue flex items-center">
                                    <x-icon.star class="w-4 h-4 p-0.5" />
                                    <x-icon.star class="w-4 h-4 p-0.5" />
                                    <x-icon.star class="w-4 h-4 p-0.5" />
                                    <x-icon.star class="w-4 h-4 p-0.5" />
                                    <x-icon.star class="w-4 h-4 p-0.5" />
                                </div>
                                <span class="text-sm leading-4 text-medrun-masala">24 reviews</span>
                            </div>
                            <p class="text-sm leading-4 text-medrun-masala">33K items sold</p>

                            <div>
                                <button type="button"
                                    class="bg-white border p-3 rounded sm:p-4 font-medium hover:bg-medrun-yellow-light transition duration-200 text-medrun-masala text-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-medrun-yellow">
                                    Articles
                                </button>
                                <button type="button"
                                    class="bg-white border p-3 rounded sm:p-4 font-medium hover:bg-medrun-yellow-light transition duration-200 text-medrun-masala text-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-medrun-yellow">
                                    Catalogues
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Buttons -->
                    <div class="w-full  xs:max-w-32 sm:max-w-44 lg:max-w-56 space-y-2">
                        <button type="button"
                            class="bg-medrun-blue-light p-3 w-full rounded-md text-white font-medium inline-flex items-center justify-center hover:bg-medrun-blue-light/90 transition duration-200 text-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-medrun-blue-light">
                            Visit store
                        </button>
                        <button type="button"
                            class="bg-white p-3 w-full rounded-md text-medrun-masala  font-medium inline-flex items-center justify-center border  hover:bg-gray-50 transition duration-200 text-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-medrun-blue-light">
                            Contact
                        </button>
                        <button type="button"
                            class="bg-white p-3 w-full rounded-md gap-x-2 text-medrun-masala  font-medium inline-flex items-center justify-center border hover:bg-gray-50 transition duration-200 text-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-medrun-blue-light">
                            <x-icon.heart-outline class="w-4.5 h-4.5" />
                            Save <span class="hidden sm:inline">this seller</span>
                        </button>
                    </div>
                </div>

                <span
                    class="inline-flex text-sm mt-4 md:mt-6 sm:text-lg sm:leading-6 sm:font-medium items-center text-medrun-masala gap-x-3">
                    <x-icon.calendar class="w-4.5 h-4.5 -mt-0.5" />
                    Joined Feb 2023
                </span>

                <!-- Tags -->
                <div class="mt-4 md:mt-6">
                    <div class="flex items-center justify-between  space-x-12">
                        <div class="text-lg leading-5 text-medrun-masala font-semibold">Popular categories from this
                            store</div>
                        <a href="#"
                            class="text-lg leading-4 flex-shrink-0 text-medrun-blue-light hover:text-medrun-sky transition duration-200">See
                            All</a>
                    </div>
                </div>

                <div class="mt-3 space-y-3">
                    <x-tag class="mr-2 sm:mr-3" href="/">Analytical</x-tag>
                    <x-tag class="mr-2 sm:mr-3" href="/">Clinical</x-tag>
                    <x-tag class="mr-2 sm:mr-3" href="/">Life Science</x-tag>
                    <x-tag class="mr-2 sm:mr-3" href="/">Research News</x-tag>
                    <x-tag class="mr-2 sm:mr-3" href="/">Lab Products</x-tag>
                    <x-tag class="mr-2 sm:mr-3" href="/">Bio Process</x-tag>
                    <x-tag class="mr-2 sm:mr-3" href="/">Automation</x-tag>
                    <x-tag class="mr-2 sm:mr-3" href="/">Detection</x-tag>
                    <x-tag class="mr-2 sm:mr-3" href="/">Software</x-tag>
                    <x-tag class="mr-2 sm:mr-3" href="/">Cell Culture</x-tag>
                    <x-tag class="mr-2 sm:mr-3" href="/">Reagents</x-tag>
                </div>
            </div>

        </section>

        <section class="mb-8 sm:mb-16">
            <div>
                <!-- Heading -->
                <x-section-heading title="Products in the same category" variant="simple" viewMore="#" />
                <!-- Products grid -->
                <div class="mt-6 grid gap-4 grid-cols-1 xs:grid-cols-2 lg:grid-cols-4">
                    <x-product-card labelText="Refurbished" />
                    <x-product-card labelText="Open Box" labelColor="sky" />
                    <x-product-card labelText="Refurbished" />
                    <x-product-card labelText="Open Box" labelColor="sky" />
                </div>
            </div>
        </section>

        <section class="mb-8 sm:mb-16">
            <div>
                <!-- Heading -->
                <x-section-heading title="Products from the same seller" variant="simple" viewMore="#" />
                <!-- Products grid -->
                <div class="mt-6 grid gap-4 grid-cols-1 xs:grid-cols-2 lg:grid-cols-4">
                    <x-product-card labelText="Refurbished" />
                    <x-product-card labelText="Open Box" labelColor="sky" />
                    <x-product-card labelText="Refurbished" />
                    <x-product-card labelText="Open Box" labelColor="sky" />
                </div>
            </div>
        </section>

        <section class="mb-8 sm:mb-16">
            <div class="rounded-xl border p-4 md:p-6 bg-white">
                <!-- Heading -->
                <x-section-heading title="Rating and Reviews" variant="simple" />

                <!-- Detailed rating -->
                <div class="flex justify-between items-center mb-2 mt-4 sm:mt-6">
                    <h6 class="font-semibold text-medrun-masala leading-5">Detailed seller ratings</h6>
                    <button type="button"
                        class="text-medrun-masala text-sm font-medium leading-5 hover:text-medrun-sky transition duration-200 flex focus-visible:outline-none gap-x-1 items-center">
                        <x-icon.pen class="w-4.5 h-4.5" />
                        Write a review
                    </button>
                </div>
                <span class="text-xs block text-medrun-masala mb-3">Average for the last 12 months</span>
                <div class="mb-4 sm:mb-6 flex space-x-2">
                    <p class="text-sm text-medrun-masala "><strong class="font-medium">Value:</strong> 4.2</p>
                    <p class="text-sm text-medrun-masala "><strong class="font-medium">Learning curve:</strong> 4.8
                    </p>
                    <p class="text-sm text-medrun-masala "><strong class="font-medium">Durability:</strong> 4.8</p>
                </div>

                <div class="tab-wrapper" x-data="{ activeTab: 0 }">
                    <div class="flex justify-between items-center">
                        <div class="inline-flex border-b mb-3 md:mb-4 space-x-3 md:space-x-4">
                            <label @click="activeTab = 0" class="text-xs xs:text-sm text-medrun-masala pb-3"
                                :class="{ ' font-medium border-b border-medrun-blue': activeTab === 0 }">This Item
                                (20)</label>
                            <label @click="activeTab = 1" class="text-xs xs:text-sm text-medrun-masala pb-3"
                                :class="{ ' font-medium border-b border-medrun-blue': activeTab === 1 }">All Items
                                (20k)</label>
                        </div>
                        <div x-data="{ open: false }" @keydown.escape.stop="open = false" @click.away="open = false"
                            class="relative inline-block text-left">
                            <div class="flex items-center">
                                <x-dropdown title="Sory By">
                                    <a href="#" class="text-medrun-masala block px-4 py-2 text-sm"
                                        role="menuitem" tabindex="-1" id="menu-item-0">Relevance</a>
                                    <a href="#" class="text-medrun-masala block px-4 py-2 text-sm"
                                        role="menuitem" tabindex="-1" id="menu-item-1">Clinical</a>
                                </x-dropdown>
                            </div>

                            <!-- Category select dropdown -->
                            <div x-show="open" x-transition:enter="transition ease-out duration-100"
                                x-transition:enter-start="transform opacity-0 scale-95"
                                x-transition:enter-end="transform opacity-100 scale-100"
                                x-transition:leave="transition ease-in duration-75"
                                x-transition:leave-start="transform opacity-100 scale-100"
                                x-transition:leave-end="transform opacity-0 scale-95"
                                class="absolute right-0 z-10 mt-2 w-56 origin-top-right divide-y divide-gray-100 rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                                x-ref="menu-items" role="menu" aria-orientation="vertical"
                                aria-labelledby="menu-button" tabindex="-1" style="display: none;">
                                <div class="py-1" role="none">
                                    <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                                    <a href="#" class="text-medrun-masala block px-4 py-2 text-sm"
                                        role="menuitem" tabindex="-1" id="menu-item-0">Analytical</a>
                                    <a href="#" class="text-medrun-masala block px-4 py-2 text-sm"
                                        role="menuitem" tabindex="-1" id="menu-item-1">Clinical</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-panel" :class="{ 'active': activeTab === 0 }"
                        x-show.transition.in.opacity.duration.600="activeTab === 0">
                        <ul class="space-y-4">
                            @php
                                $serviceProvidersCount = 4;
                            @endphp
                            @for ($i = 0; $i < $serviceProvidersCount; $i++)
                                <li class="border-b border-gray-200 pb-4">
                                    <dl>
                                        <div class="flex justify-between items-center">
                                            <dt class="text-base font-semibold text-medrun-masala">Adrian Griffen</dt>
                                            <dd class="text-xs text-medrun-masala"><time
                                                    datetime="2023-01-23">12/31/2020</time></dd>
                                        </div>
                                        <p class="mt-3 text-sm text-medrun-masala">Was exactly as described</p>
                                        <div class="mt-3 flex gap-x-0.5 text-medrun-blue hover:text-medrun-yellow-dark">
                                            <x-icon.star class="w-3 h-3" />
                                            <x-icon.star class="w-3 h-3" />
                                            <x-icon.star class="w-3 h-3" />
                                            <x-icon.star class="w-3 h-3" />
                                            <x-icon.star class="w-3 h-3" />
                                        </div>
                                    </dl>
                                </li>
                            @endfor
                        </ul>
                    </div>
                    <div class="tab-panel" :class="{ 'active': activeTab === 1 }"
                        x-show.transition.in.opacity.duration.600="activeTab === 1">
                        <p>The second tab’s example content.</p>
                    </div>
                </div>

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
        <div class="mb-8 sm:mb-16">
            <x-subscribe title="Sign Up for exclusive updates" />
        </div>
    </div>
