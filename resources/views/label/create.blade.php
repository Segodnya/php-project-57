@extends('layouts.main')

@section('content')
    <form action="{{ route('labels.store') }}" method="POST">
        @csrf
        <div class="row m-0">
            <div class="col-9 square border border-light bg-slate-100 rounded p-3">
                <label for="name" class="form-label">{{ __('messages.Title') }}</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}" class="form-control">
                <x-input-error :messages="$errors->get('name')" class="m-0 px-3" />
                <br>
                <label for="description" class="form-label">{{ __('messages.Description') }}</label>
                <textarea name="description" id="description" class="form-control" style="height: 21.25rem;">{{ old('description') }}</textarea>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-3">
                <a class="btn btn-secondary" href="{{ route('labels.index') }}">{{ __('messages.Cancel') }}</a>
                <button type="submit" class="btn btn-primary mx-1.5">{{ __('messages.Create') }}</button>
            </div>
        </div>
    </form>
@endsection

@section('title')
    <x-title-task-manager text="messages.Create a label"/>
@endsection