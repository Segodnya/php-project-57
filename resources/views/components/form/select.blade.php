@props(['name', 'label', 'options', 'value' => null, 'placeholder' => null])

<div class="form-group mb-4">
    <label for="{{ $name }}" class="block text-sm font-medium text-gray-700 mb-1">
        {{ __($label) }}
        @if($attributes->has('required'))
            <span class="text-red-500">*</span>
        @endif
    </label>

    <select
        id="{{ $name }}"
        name="{{ str_ends_with($name, '[]') ? $name : $name }}"
        {{ $attributes->merge(['class' => 'form-input-base ' . ($errors->has(str_replace('[]', '', $name)) ? 'border-red-500' : '')]) }}
    >
        @if($placeholder)
            <option value="">{{ $placeholder }}</option>
        @endif

        @foreach($options as $optionValue => $optionLabel)
            <option value="{{ $optionValue }}" {{ in_array($optionValue, (array)$value) ? 'selected' : '' }}>
                {{ $optionLabel }}
            </option>
        @endforeach
    </select>

    @error(str_replace('[]', '', $name))
        <div class="form-error">
            {{ $message }}
        </div>
    @enderror
</div> 