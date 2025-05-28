@extends('layouts.main')

@section('content')
    <x-status-form 
        action="{{ route('task_statuses.update', $taskStatus) }}"
        method="PATCH"
        :status="$taskStatus"
        :submitButtonText="__('messages.Edit')"
    />
@endsection

@section('title')
    <x-title-task-manager text="messages.Changing the status"/>
@endsection