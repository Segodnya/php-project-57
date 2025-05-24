@props(['name', 'label', 'type' => 'text', 'options' => [], 'placeholder' => null])

<div class="mb-4">
    <label for="{{ $name }}" class="form-label">
        {{ __($label) }}
    </label>
    
    @if ($type === 'textarea')
        <textarea 
            id="{{ $name }}"
            name="{{ $name }}"
            {{ $attributes->merge(['class' => 'form-input-base w-full']) }}
        >{{ $slot }}</textarea>
    @elseif ($type === 'select')
        <select
            id="{{ $name }}"
            name="{{ $name }}"
            {{ $attributes->merge(['class' => 'form-input-base w-full']) }}
        >
            @if ($placeholder)
                <option value="">{{ $placeholder }}</option>
            @endif
            
            @foreach ($options as $value => $label)
                <option value="{{ $value }}" {{ $value == $slot ? 'selected' : '' }}>
                    {{ $label }}
                </option>
            @endforeach
        </select>
    @else
        <input 
            type="{{ $type }}"
            id="{{ $name }}"
            name="{{ $name }}"
            {{ $attributes->merge(['class' => 'form-input-base w-full']) }}
            value="{{ $slot }}"
        >
    @endif
    
    <x-input-error :messages="$errors->get($name)" class="mt-2" />
</div> 