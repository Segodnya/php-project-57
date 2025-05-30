@props(['status'])
@switch($status)
        @case('в работе')
            <div class="square shadow-sm bg-blue-600 rounded my-3"></div>
            @break
      
        @case('новый')
            <div class="square shadow-sm bg-pink-600 rounded my-3"></div>
            @break

        @case('на тестировании')
            <div class="square shadow-sm bg-amber-400 rounded my-3"></div>
            @break

        @case('завершен')
            <div class="square shadow-sm bg-lime-400 rounded my-3"></div>
            @break
      
        @default
            <div class="square shadow-sm bg-violet-600 rounded my-3"></div>
@endswitch