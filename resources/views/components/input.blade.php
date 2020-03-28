@props(['container', 'field', 'placeholder', 'label', 'model', 'maxlength'])

<div class="{{ $container ?? '' }}">

    <x-label :for="$field" :label="$label ?? ucfirst($field)"/>

    <input
        id="{{ $field }}"
        type="text"
        name="{{ $field }}"
        @isset($maxlength) maxlength="{{ $maxlength }}" @endisset
        @isset($placeholder) placeholder="{{ $placeholder }}" @endisset
        class="form-input @error($field) border-red-500 @enderror"
        value="{{ empty($model) ? old($field) : old($field, $model->$field) }}">

    @error($field)
        <p class="text-red-500">{{ $message }}</p>
    @enderror

</div>
