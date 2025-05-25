@extends('layouts.main')

@section('content')
    <div class="container py-4">
        <form action="{{ route('labels.store') }}" method="POST" class="relative z-10">
            @csrf
            <div class="bg-white rounded-lg shadow-sm p-6">
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-700">{{ __('messages.Title') }}</label>
                    <input type="text" 
                           name="name" 
                           id="name" 
                           value="{{ old('name') }}" 
                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm @error('name') border-red-500 @enderror">
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <div class="mb-4">
                    <label for="description" class="block text-sm font-medium text-gray-700">{{ __('messages.Description') }}</label>
                    <textarea name="description" 
                              id="description" 
                              class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                              rows="4">{{ old('description') }}</textarea>
                </div>

                <div class="flex justify-start space-x-4 mt-6">
                    <a href="{{ route('labels.index') }}" 
                       class="inline-flex justify-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                        {{ __('messages.Cancel') }}
                    </a>
                    <button type="submit" 
                            class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                        {{ __('messages.Create') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection

@section('title')
    <x-title-task-manager text="messages.Create a label"/>
@endsection