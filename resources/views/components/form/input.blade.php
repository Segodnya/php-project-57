@props(['name', 'label', 'type' => 'text', 'value' => null])

<div class="form-group mb-4">
    <label for="{{ $name }}" class="block text-sm font-medium text-gray-700 mb-1">
        {{ __($label) }}
        @if($attributes->has('required'))
            <span class="text-red-500">*</span>
        @endif
    </label>
    
    <input 
        type="{{ $type }}"
        id="{{ $name }}"
        name="{{ $name }}"
        value="{{ old($name, $value) }}"
        {{ $attributes->merge(['class' => 'form-input-base ' . ($errors->has($name) ? 'border-red-500' : '')]) }}
    >
    
    @error($name)
        <div class="form-error">
            {{ $message }}
        </div>
    @enderror
</div> 