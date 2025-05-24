@props(['title', 'actions' => null])

<div class="page-header">
    <div class="page-header-inner">
        <div class="flex justify-between items-center">
            <h1 class="text-title">{{ $title }}</h1>
            
            @if ($actions)
                <div class="flex space-x-3">
                    {{ $actions }}
                </div>
            @endif
        </div>

        @if ($slot->isNotEmpty())
            <div class="mt-4">
                {{ $slot }}
            </div>
        @endif
    </div>
</div> 