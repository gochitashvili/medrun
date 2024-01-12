@props(['title' => ''])
<div>
    <!-- Heading -->
    <div class="mb-4 lg:mb-6">
        <div class="flex lg:flex-col items-center lg:items-start justify-between relative">
            <div class="relative border-b w-full flex justify-center">
                <h2 class="text-lg sm:font-medium inline-block relative text-medrun-masala pb-1 lg:pb-2">
                    @if ($title)
                        {{ $title }}
                    @endif
                    <div class="h-px w-full bg-medrun-blue-light absolute bottom-0"></div>
                </h2>
            </div>
        </div>
    </div>
    <div class="max-w-md mx-auto">
        <!-- Form -->
        <form class="mb-4 lg:mb-6">
            <div class="mx-auto flex">
                <div class="relative flex flex-grow">
                    <input type="email" name="email" id="email"
                        class="block w-full rounded-none rounded-l-xl border-0 py-3.5 px-4 transition duration-200 text-sm text-medrun-masala ring-1 ring-inset ring-medrun-blue-light placeholder:text-medrun-masala focus:ring-2 focus:ring-inset focus:ring-medrun-blue-light sm:min-w-80"
                        placeholder="Enter your email address" autocomplete="email" />
                </div>
                <button type="button"
                    class="relative inline-flex items-center rounded-r-xl bg-medrun-blue-light px-4 font-medium text-lg text-white ring-medrun-blue-light transition duration-200 hover:bg-medrun-blue">Subscribe</button>
            </div>
        </form>
        <div class="text-center">
            <p class="text-sm text-medrun-masala">We’ll never share your email address with any third-party.</p>
            <div class="flex justify-center">
                <a href="#"
                    class="flex justify-center text-sm font-medium text-medrun-masala transition duration-200 hover:text-medrun-sky">Terms
                    & Conditions</a>
                <span class="mx-2 mt-1 block max-h-3 w-px bg-medrun-masala"></span>
                <a href="#"
                    class="flex justify-center text-sm font-medium text-medrun-masala transition duration-200 hover:text-medrun-sky">Privacy
                    Policy</a>
            </div>
        </div>
    </div>
</div>
