@extends('layouts.main')

@section('content')
    <x-page-header :title="__('messages.Create Task')">
        <x-slot name="actions">
            <a href="{{ route('tasks.index') }}" class="btn-secondary">
                {{ __('messages.Back to List') }}
            </a>
        </x-slot>
    </x-page-header>

    <x-form-container :action="route('tasks.store')" class="mt-6">
        <div class="grid grid-cols-3 gap-6">
            <div class="col-span-2">
                <x-form-field 
                    name="name"
                    label="messages.Title"
                    :value="$task->name"
                    class="form-input-base"
                />
                
                <x-form-field 
                    name="description"
                    label="messages.Description"
                    type="textarea"
                    class="form-input-base h-48"
                >{{ $task->description }}</x-form-field>
                
                <x-form-field 
                    name="assigned_to_id"
                    label="messages.Executor"
                    type="select"
                    :options="$users"
                    placeholder="------------"
                    class="form-input-base"
                />
            </div>
            
            <div>
                <x-form-field 
                    name="status_id"
                    label="messages.Status"
                    type="select"
                    :options="$statuses"
                    class="form-input-base"
                />

                <x-form-field 
                    name="labels[]"
                    label="messages.Labels"
                    type="select"
                    :options="$labels"
                    multiple
                    class="form-input-base"
                />
            </div>
        </div>

        <x-slot name="actions">
            <button type="submit" class="btn-primary">
                {{ __('messages.Create Task') }}
            </button>
        </x-slot>
    </x-form-container>
@endsection

@section('title')
    <x-title-task-manager text="messages.Create a task"/>
@endsection
