@extends('layouts.main')

@section('content')
      <section>
        @foreach ($statuses as $status)
              <div class="row m-2.5">
                <div class="col-6 square border border-light bg-slate-100 hover:bg-gray-300 rounded ms-1">
                  <div class="row d-flex justify-content-between">
                    <div class="col-6">
                      <p class="p-2 m-0 align-self-center">
                        {{$status->id}}
                        {{$status->name}}
                      </p>
                    </div>
                    <div class="col-6 p-2">
                      <div class="row justify-content-end">
                        <div class="col-10 d-flex align-self-center justify-content-end">
                          <p class="text-secondary m-0">{{$status->formatted_date}}</p>
                        </div>
                          <div class="col-2 p-0">
                            @can('update', $status)
                                <a class="text-secondary link-underline link-underline-opacity-0" href="{{route('task_statuses.edit', $status)}}">
                                    Изменить
                                </a>
                            @endcan
                            @can('delete', $status)
                                <a href="#" class="text-secondary link-underline link-underline-opacity-0 delete-link" data-id="{{ $status->id }}" data-confirm="{{ __('messages.Are you sure?') }}">
                                    Удалить
                                </a>
                                <form id="delete-form-{{ $status->id }}" method="POST" class="d-none" action="{{ route('task_statuses.destroy', $status) }}">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            @endcan
                          </div>
                      </div>
                    </div>
                  </div>    
                </div>
              </div>
        @endforeach
        <div class="row d-flex justify-content-between">
          <div class="col-7">
            {{ $statuses->links() }}
          </div>
          <div class="col-3 d-flex align-self-center justify-content-end">
              @can('create', App\Models\TaskStatus::class)
                <a class="btn btn-primary" href="{{route('task_statuses.create')}}">{{__('messages.Create status')}}</a>
              @endcan
          </div>
        </div>

        <x-hexlet-stub-test :objects="$statuses"/>
      </section>
@endsection

@section('title')
      <x-title-task-manager text="messages.Statuses"/>
@endsection