@props(['hover' => false])

<div {{ $attributes->merge(['class' => $hover ? 'hover-card' : 'card-container']) }}>
    {{ $slot }}
</div> 