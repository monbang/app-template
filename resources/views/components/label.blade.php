@props(['label'])

<label {{ $attributes->merge(['class' => 'block tracking-wide text-gray-600 font-semibold uppercase pb-1 text-xs']) }}>
    {{ $label }}
</label>

