@props(['name', 'label', 'value' => null])

<div class="mb-4">
    <label for="{{ $name }}" class="form-label">
        {{ $label }}
    </label>
    
    <textarea 
        id="{{ $name }}"
        name="{{ $name }}"
        {{ $attributes->merge(['class' => 'form-input-base']) }}
    >{{ $value }}</textarea>
    
    <x-input-error :messages="$errors->get($name)" class="mt-2" />
</div> 