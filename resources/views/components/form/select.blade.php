@props(['name', 'label', 'options' => [], 'placeholder' => null, 'value' => null])

<div class="mb-4">
    <label for="{{ $name }}" class="form-label">
        {{ $label }}
    </label>
    
    <select
        id="{{ $name }}"
        name="{{ $name }}"
        {{ $attributes->merge(['class' => 'form-input-base']) }}
    >
        @if ($placeholder)
            <option value="">{{ $placeholder }}</option>
        @endif
        
        @foreach ($options as $value => $label)
            <option value="{{ $value }}" {{ old($name, $value) == $value ? 'selected' : '' }}>
                {{ $label }}
            </option>
        @endforeach
    </select>
    
    <x-input-error :messages="$errors->get($name)" class="mt-2" />
</div> 