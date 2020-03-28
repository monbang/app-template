@props(['field', 'label', 'container', 'placeholder'])

<div class="{{ $container ?? '' }}">
     <x-label
        :for="$field"
        :label="$label ?? ucfirst($field)"/>

    <input
        type="password"
        name="{{ $field }}"
        class="form-input @error($field) border-red-500 @enderror"
        @isset($placeholder) placeholder="{{ $placeholder }}" @endisset>

    @error($field)
        <p class="text-red-500">{{ $message }}</p>
    @enderror

</div>
