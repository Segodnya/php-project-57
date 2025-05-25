@extends('layouts.main')

@section('content')
    <form action="{{ route('tasks.update', $task) }}" method="POST" class="form">
        @csrf
        @method('PATCH')
        <div class="row square border border-light bg-slate-100 rounded p-3 m-0 d-flex justify-content-center">
            <div class="col-9 ps-0">
                <label for="name" class="form-label">{{ __('messages.Title') }}</label><br>
                <input type="text" name="name" id="name" value="{{ old('name', $task->name) }}" class="form-control">
                <x-input-error :messages="$errors->get('name')" class="m-0 px-3" />
                <br>
                <label for="description" class="form-label">{{ __('messages.Description') }}</label><br>
                <textarea name="description" id="description" class="form-control">{{ old('description', $task->description) }}</textarea><br>
                <label for="assigned_to_id" class="form-label">{{ __('messages.Executor') }}</label><br>
                <select name="assigned_to_id" id="assigned_to_id" class="form-control">
                    <option value="">------------</option>
                    @foreach($users as $id => $name)
                        <option value="{{ $id }}" {{ old('assigned_to_id', $task->assignedToUser->id ?? '') == $id ? 'selected' : '' }}>
                            {{ $name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="col-3 pe-0">
                <label for="label" class="form-label">{{ __('messages.Label') }}</label><br>
                <select name="label[]" id="label" multiple class="form-select" style="height: 21.25rem;">
                    @foreach($labels as $id => $name)
                        <option value="{{ $id }}" {{ in_array($id, old('label', $task->labels->pluck('id')->toArray())) ? 'selected' : '' }}>
                            {{ $name }}
                        </option>
                    @endforeach
                </select><br>
                <label for="status_id" class="form-label">{{ __('messages.Status') }}</label><br>
                <select name="status_id" id="status_id" class="form-control">
                    <option value="">------------</option>
                    @foreach($statuses as $id => $name)
                        <option value="{{ $id }}" {{ old('status_id', $task->status->id ?? '') == $id ? 'selected' : '' }}>
                            {{ $name }}
                        </option>
                    @endforeach
                </select>
                <x-input-error :messages="$errors->get('status_id')" class="m-0 px-3" />
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-3">
                <a class="btn btn-secondary" href="{{ route('tasks.index') }}">{{ __('messages.Cancel') }}</a>
                <button type="submit" class="btn btn-primary mx-1.5">{{ __('messages.Edit') }}</button>
            </div>
        </div>
    </form>
@endsection

@section('title')
    <x-title-task-manager text="messages.Changing the task"/>
@endsection