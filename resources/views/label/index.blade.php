@extends('layouts.main')

@section('content')
    <section>
        @foreach ($labels as $label)
            <x-card hover class="m-2.5">
                <div class="row d-flex justify-content-between">
                    <div class="col-3">
                        <p class="p-2 m-0 align-self-center">
                            {{$label->id}}
                            {{$label->name}}
                        </p>
                    </div>
                    <div class="col-6">
                        <p class="p-2 m-0 align-self-center">
                            {{$label->description}}
                        </p>
                    </div>
                    <div class="col-3 d-flex justify-content-end">
                        <div class="p-2">
                            @can('update', $label)
                                <a href="{{ route('labels.edit', $label) }}" class="nav-link">
                                    Изменить
                                </a>
                            @endcan
                            @can('delete', $label)
                                <form method="POST" class="d-inline delete-form" action="{{ route('labels.destroy', $label) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="nav-link border-0 bg-transparent delete-btn" data-confirm="{{ __('messages.Are you sure?') }}">
                                        Удалить
                                    </button>
                                </form>
                            @endcan
                        </div>
                    </div>
                </div>
            </x-card>
        @endforeach

        <div class="row d-flex justify-content-between mt-4">
            <div class="col-7">
                {{ $labels->links() }}
            </div>
            <div class="col-3 d-flex align-self-center justify-content-end">
                @can('create', App\Models\Label::class)
                    <a href="{{ route('labels.create') }}" class="btn btn-primary">
                        {{ __('messages.Create label') }}
                    </a>
                @endcan
            </div>
        </div>

        <x-hexlet-stub-test :objects="$labels"/>
    </section>
@endsection

@section('title')
    <x-title-task-manager text="messages.Label"/>
@endsection