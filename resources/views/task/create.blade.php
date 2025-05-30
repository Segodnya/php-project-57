@extends('layouts.main')

@section('content')
    <x-page-header :title="__('messages.Create Task')">
        <x-slot name="actions">
            <a href="{{ route('tasks.index') }}" class="btn-secondary">
                {{ __('messages.Back to List') }}
            </a>
        </x-slot>
    </x-page-header>

    <form action="{{ route('tasks.store') }}" method="POST" class="mt-6" novalidate>
        @csrf
        
        <div class="grid grid-cols-3 gap-6">
            <div class="col-span-2">
                <x-form.input 
                    name="name"
                    :label="__('messages.Title')"
                    :value="old('name', $task->name)"
                    required
                />
                
                <x-form.textarea 
                    name="description"
                    :label="__('messages.Description')"
                    :value="old('description', $task->description)"
                    class="h-48"
                />
                
                <x-form.select 
                    name="assigned_to_id"
                    :label="__('messages.Executor')"
                    :options="$users"
                    :value="old('assigned_to_id')"
                    placeholder="------------"
                />
            </div>
            
            <div>
                <x-form.select 
                    name="status_id"
                    :label="__('messages.Status')"
                    :options="$statuses"
                    :value="old('status_id')"
                    placeholder="------------"
                    required
                />

                <x-form.select 
                    name="label[]"
                    :label="__('messages.Labels')"
                    :options="$labels"
                    :value="old('label', [])"
                    multiple
                />
            </div>
        </div>

        <div class="mt-4">
            <button type="submit" class="btn-primary">
                {{ __('messages.Create') }}
            </button>
        </div>
    </form>
@endsection

@section('title')
    <x-title-task-manager text="messages.Create a task"/>
@endsection
