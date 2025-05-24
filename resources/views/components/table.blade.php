@props(['headers' => null])

<div class="overflow-x-auto">
    <table {{ $attributes->merge(['class' => 'table-base']) }}>
        @if($headers)
            <thead>
                <tr>
                    @foreach($headers as $header)
                        <th class="table-header">{{ $header }}</th>
                    @endforeach
                </tr>
            </thead>
        @endif
        <tbody class="bg-white divide-y divide-gray-200">
            {{ $slot }}
        </tbody>
    </table>
</div> 