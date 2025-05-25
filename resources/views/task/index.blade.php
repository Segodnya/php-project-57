@extends('layouts.main')

@section('content')
  <div class="page-section">
    <div class="flex-between mb-4">
      <h1 class="text-title">{{ __('messages.Tasks') }}</h1>
      @can('create', App\Models\Task::class)
    <a href="{{ route('tasks.create') }}" class="btn-primary">
      {{ __('messages.Create task') }}
    </a>
    @endcan
    </div>

    <x-form-container :action="route('tasks.index')" method="GET" class="mb-6">
      <div class="form-group">
        <div class="form-section">
          <x-input-label for="filter[status_id]" :value="__('messages.Status')" />
          <select name="filter[status_id]" id="filter[status_id]" class="form-input-base">
            <option value="">{{ __('messages.All statuses') }}</option>
            @foreach($statuses as $id => $name)
        <option value="{{ $id }}" {{ isset($filter['status_id']) && $filter['status_id'] == $id ? 'selected' : '' }}>
        {{ $name }}
        </option>
      @endforeach
          </select>
        </div>

        <div class="form-section">
          <x-input-label for="filter[created_by_id]" :value="__('messages.Author')" />
          <select name="filter[created_by_id]" id="filter[created_by_id]" class="form-input-base">
            <option value="">{{ __('messages.All authors') }}</option>
            @foreach($users as $id => $name)
        <option value="{{ $id }}" {{ isset($filter['created_by_id']) && $filter['created_by_id'] == $id ? 'selected' : '' }}>
        {{ $name }}
        </option>
      @endforeach
          </select>
        </div>

        <div class="form-section">
          <x-input-label for="filter[assigned_to_id]" :value="__('messages.Executor')" />
          <select name="filter[assigned_to_id]" id="filter[assigned_to_id]" class="form-input-base">
            <option value="">{{ __('messages.All executors') }}</option>
            @foreach($users as $id => $name)
        <option value="{{ $id }}" {{ isset($filter['assigned_to_id']) && $filter['assigned_to_id'] == $id ? 'selected' : '' }}>
        {{ $name }}
        </option>
      @endforeach
          </select>
        </div>
      </div>

      <div class="flex justify-end mt-4">
        <x-primary-button>{{ __('messages.Apply') }}</x-primary-button>
      </div>
    </x-form-container>

    <x-table>
      <x-slot name="headers">
        <tr>
          <th class="table-header">{{ __('messages.ID') }}</th>
          <th class="table-header">{{ __('messages.Name') }}</th>
          <th class="table-header">{{ __('messages.Status') }}</th>
          <th class="table-header">{{ __('messages.Created at') }}</th>
          <th class="table-header">{{ __('messages.Author') }}</th>
          <th class="table-header">{{ __('messages.Executor') }}</th>
          <th class="table-header">{{ __('messages.Actions') }}</th>
        </tr>
      </x-slot>

      @foreach ($tasks as $task)
      <tr>
      <td class="table-cell">{{ $task->id }}</td>
      <td class="table-cell">{{ $task->name }}</td>
      <td class="table-cell">{{ $task->status->name ?? '' }}</td>
      <td class="table-cell">{{ $task->formatted_date }}</td>
      <td class="table-cell">{{ $task->author->name ?? '' }}</td>
      <td class="table-cell">{{ $task->assignedToUser->name ?? '' }}</td>
      <td class="table-cell">
        <div class="flex space-x-3">
        <a href="{{ route('tasks.show', $task) }}" class="link-base">
          {{ __('messages.View') }}
        </a>
        @can('update', $task)
      <a href="{{ route('tasks.edit', $task) }}" class="link-base">
      {{ __('messages.Edit') }}
      </a>
      @endcan
        @can('delete', $task)
      <form method="POST" action="{{ route('tasks.destroy', $task) }}" class="inline">
      @csrf
      @method('DELETE')
      <button type="submit" class="link-base" onclick="return confirm('{{ __('messages.Are you sure?') }}')">
      {{ __('messages.Delete') }}
      </button>
      </form>
      @endcan
        </div>
      </td>
      </tr>
    @endforeach
    </x-table>

    <div class="mt-4">
      {{ $tasks->links() }}
    </div>
  </div>
@endsection

@section('title')
    <x-title-task-manager text="messages.Task"/>
@endsection

@section('filter')
    <div class="mb-3">
        <form action="{{ route('tasks.index') }}" method="GET" class="form">
            <div class="row">
                <div class="col-2">
                    <select name="filter[status_id]" class="form-control">
                        <option value="">{{ __('messages.Status') }}</option>
                        @foreach($statuses as $id => $name)
                            <option value="{{ $id }}" {{ isset($filter['status_id']) && $filter['status_id'] == $id ? 'selected' : '' }}>
                                {{ $name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-4">
                    <select name="filter[created_by_id]" class="form-control">
                        <option value="">{{ __('messages.Author') }}</option>
                        @foreach($users as $id => $name)
                            <option value="{{ $id }}" {{ isset($filter['created_by_id']) && $filter['created_by_id'] == $id ? 'selected' : '' }}>
                                {{ $name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-4">
                    <select name="filter[assigned_to_id]" class="form-control">
                        <option value="">{{ __('messages.Executor') }}</option>
                        @foreach($users as $id => $name)
                            <option value="{{ $id }}" {{ isset($filter['assigned_to_id']) && $filter['assigned_to_id'] == $id ? 'selected' : '' }}>
                                {{ $name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-2 d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">{{ __('messages.Apply') }}</button>
                </div>
            </div>
        </form>
    </div>
@endsection