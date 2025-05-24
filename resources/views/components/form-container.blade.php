@props(['action', 'method' => 'POST'])

<form action="{{ $action }}" method="{{ $method === 'GET' ? 'GET' : 'POST' }}" {{ $attributes->merge(['class' => 'form-container']) }}>
    @csrf
    @if ($method !== 'GET' && $method !== 'POST')
        @method($method)
    @endif
    
    {{ $slot }}
</form> 