@props(['action', 'method' => 'POST', 'status' => null, 'submitButtonText'])

<form action="{{ $action }}" method="POST">
    @csrf
    @if($method !== 'POST')
        @method($method)
    @endif
    <div class="col-4 d-flex align-items-center">
        <div class="row square border border-light bg-slate-100 hover:bg-gray-300 rounded py-2 ms-0">
            <div class="col-3 d-flex align-items-center">
                <label for="name" class="form-label">{{ __('messages.Title') }}</label>
            </div>
            <div class="col-9">
                <input type="text" name="name" id="name" value="{{ old('name', optional($status)->name) }}" class="form-control">
                <x-input-error :messages="$errors->get('name')" class="m-0 px-3" />
            </div>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-3">
            <a class="btn btn-secondary" href="{{ route('task_statuses.index') }}">{{ __('messages.Cancel') }}</a>
            <button type="submit" class="btn btn-primary mx-1.5">{{ $submitButtonText }}</button>
        </div>
    </div>
</form> 