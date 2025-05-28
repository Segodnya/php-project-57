@extends('layouts.main')

@section('content')
    <x-status-form 
        action="{{ route('task_statuses.store') }}"
        :submitButtonText="__('messages.Create')"
    />
@endsection

@section('title')
    <x-title-task-manager text="messages.Create a status"/>
@endsection