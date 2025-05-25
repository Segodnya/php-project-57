@props(['messages'])

@if ($messages)
    <div {{ $attributes->merge(['class' => 'form-error']) }}>
        @foreach ((array) $messages as $message)
            <div>{{ $message }}</div>
        @endforeach
    </div>
@endif