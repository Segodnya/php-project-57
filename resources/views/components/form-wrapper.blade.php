@props(['route', 'method' => 'POST'])

<form method="{{ $method === 'GET' ? 'GET' : 'POST' }}" action="{{ $route }}" {{ $attributes }}>
    @csrf
    @if ($method !== 'GET' && $method !== 'POST')
        @method($method)
    @endif
    
    <div class="form-container">
        {{ $slot }}
    </div>
</form> 