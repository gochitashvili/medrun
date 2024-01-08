<button
    {{ $attributes->merge(['type' => 'button', 'class' => 'inline-flex gap-x-1 items-center font-semibold leading-4.5 text-white hover:text-medrun-sky-light transition duration-200']) }}>
    {{ $slot }}
</button>
