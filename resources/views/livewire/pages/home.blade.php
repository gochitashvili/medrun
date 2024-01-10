<div class="mb-6 ">
    <x-hero />
    <div class="wrapper">
        <div class="wrapper-sm py-4 flex items-center gap-x-4 justify-between">
            <ul class="flex space-x-4 lg:space-x-6 items-center snap-x overflow-x-auto scrollbar-none">
                <li class="flex items-center gap-x-4 lg:gap-x-6 shrink-0">
                    <a class="text-medrun-masala hover:text-medrun-sky-light transition duration-200 "
                        href="#">Promote
                        your research</a>
                    <x-icon.dot class="w-3 h-3 text-medrun-blue-light" />
                </li>
                <li class="flex items-center gap-x-4 lg:gap-x-6 shrink-0">
                    <a class="text-medrun-masala hover:text-medrun-sky-light transition duration-200 "
                        href="#">Learn
                        new techniques</a>
                    <x-icon.dot class="w-3 h-3 text-medrun-blue-light" />
                </li>
                <li class="flex items-center gap-x-4 lg:gap-x-6 shrink-0">
                    <a class="text-medrun-masala hover:text-medrun-sky-light transition duration-200 "
                        href="#">Review
                        Products</a>
                    <x-icon.dot class="w-3 h-3 text-medrun-blue-light" />
                </li>
                <li class="flex items-center gap-x-4 lg:gap-x-6 shrink-0">
                    <a class="text-medrun-masala hover:text-medrun-sky-light transition duration-200 "
                        href="#">Get
                        Anonymus Service Quotes</a>
                    <x-icon.dot class="w-3 h-3 text-medrun-blue-light" />
                </li>
                <li class="flex items-center gap-x-4 lg:gap-x-6 shrink-0">
                    <a class="text-medrun-masala hover:text-medrun-sky-light transition duration-200 "
                        href="#">Pre-sales chat with agents</a>
                </li>
            </ul>
        </div>
        <!-- Trending Products -->
        <section class="wrapper-sm mt-6">
            <!-- Heading -->
            <x-section-heading title="Recent" focusText="Products"
                description="Check the hottest website designs of the week. These rising stars are worth your attention."
                viewMore="#" />
            <!-- Products grid -->
            <div class="mt-6 grid gap-4 grid-cols-1 xs:grid-cols-2 lg:grid-cols-4">
                <x-product-card />
                <x-product-card />
                <x-product-card />
                <x-product-card />
                <x-product-card />
                <x-product-card />
                <x-product-card />
                <x-product-card />
            </div>
        </section>
    </div>
</div>
