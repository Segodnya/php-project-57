@extends('layouts.main')

@section('content')
    <div class="my-12 shadow">
        <div class="row bg-light p-2 rounded position-relative">
            <div>
                <div class="row d-flex justify-content-between">
                    <div class="col-9">
                        <h1>{{$task->name}}</h1>
                    </div>

                    <div class="col-3">
                        <div class="row d-flex justify-content-end">
                            <div class="col-8 d-flex align-self-center justify-content-center pt-3">
                                <x-task-status status="{{$task->status->name}}"/>
                            </div>
                            <div class="col-3 text-end pe-0">
                                @can('update', $task)
                                    <a class="text-secondary me-1" href="{{route('tasks.edit', $task)}}"><i class="bi bi-pencil hover:text-black"></i></a>
                                @endcan
                                @can('delete', $task)
                                    <form method="POST" class="d-inline delete-form" action="{{ route('tasks.destroy', $task) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-secondary border-0 bg-transparent delete-btn" data-confirm="{{ __('messages.Are you sure?') }}">
                                            <i class="bi bi-trash hover:text-black"></i>
                                        </button>
                                    </form>
                                @endcan
                                <a class="text-secondary" href="{{route('tasks.index')}}"><i class="bi bi-x-lg hover:text-black"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="bg-danger border-1 border-top border-secondary m-1" />
                <div class="row">
                    <div class="col-12 ps-5 overflow-auto" style="height: 100px">
                        <p class="lead m-0">{{$task->description}}</p>
                    </div>
                </div>
                <hr class="bg-danger border-1 border-top border-secondary m-1"/>
                <div class="row mb-3">
                    @foreach ($task->labels as $label)
                        <div class="col-1 text-secondary"><i class="bi bi-tag text-secondary"></i> {{$label->name}}</div>
                    @endforeach
                </div>
                <div class="row">
                    <div class="col-12">
                        <p class="text-secondary m-0">
                            {{ __('messages.Created by') }}: {{$task->author->name}} | 
                            {{ __('messages.Created at') }}: {{$task->formatted_date}} | 
                            {{ __('messages.Executor') }}: {{$task->assignedToUser->name ?? '-'}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('title')
    <x-title-task-manager text="messages.View task"/>
@endsection