@props(['container'])

<div class="{{ $container ?? '' }}">
    <button
        {{ $attributes->merge(['class' => 'py-2 px-4 uppercase font-bold rounded focus:outline-none focus:shadow-outline']) }}>
        {{ $slot }}
    </button>
</div>
