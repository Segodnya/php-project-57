@props(['name', 'label', 'type' => 'text', 'value' => null])

<div class="form-group">
    <label for="{{ $name }}" class="form-label">
        {{ __($label) }}
    </label>
    
    <input 
        type="{{ $type }}"
        id="{{ $name }}"
        name="{{ $name }}"
        value="{{ old($name, $value) }}"
        {{ $attributes->merge(['class' => 'form-control']) }}
    >
    
    <x-input-error :messages="$errors->get($name)" class="m-0 px-3" />
</div> 