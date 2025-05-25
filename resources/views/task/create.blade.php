@extends('layouts.main')

@section('content')
    <x-page-header :title="__('messages.Create Task')">
        <x-slot name="actions">
            <a href="{{ route('tasks.index') }}" class="btn-secondary">
                {{ __('messages.Back to List') }}
            </a>
        </x-slot>
    </x-page-header>

    <form action="{{ route('tasks.store') }}" method="POST" class="mt-6">
        @csrf
        
        <div class="grid grid-cols-3 gap-6">
            <div class="col-span-2">
                <x-form.input 
                    name="name"
                    :label="__('messages.Title')"
                    :value="$task->name"
                />
                
                <x-form.textarea 
                    name="description"
                    :label="__('messages.Description')"
                    :value="$task->description"
                    class="h-48"
                />
                
                <x-form.select 
                    name="assigned_to_id"
                    :label="__('messages.Executor')"
                    :options="$users"
                    placeholder="------------"
                />
            </div>
            
            <div>
                <x-form.select 
                    name="status_id"
                    :label="__('messages.Status')"
                    :options="$statuses"
                />

                <x-form.select 
                    name="labels[]"
                    :label="__('messages.Labels')"
                    :options="$labels"
                    multiple
                />
            </div>
        </div>

        <div class="mt-4">
            <button type="submit" class="btn-primary">
                {{ __('messages.Создать') }}
            </button>
        </div>
    </form>
@endsection

@section('title')
    <x-title-task-manager text="messages.Create a task"/>
@endsection
