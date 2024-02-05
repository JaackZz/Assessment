<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Post Management') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    @if (session('status'))
                        <div class="alert alert-success">{{ session('status') }}</div>
                    @endif

                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4> Creating Post </h4>
                                    </div>
                                    <div class="card-body">
                                        <form action="{{ url('posts/create') }}" method="POST">
                                            @csrf

                                            <div class="mb-3">
                                                <label> Title: </label>
                                                <input type="text" name="title" class="mx-2"
                                                    value="{{ old('title') }}" />
                                                @error('title')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label> Content: </label>
                                                <textarea name="content" class="form-control mt-2" rows="2">{{ old('content') }}</textarea>
                                                @error('content')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <a href="{{ url('posts') }}" class="btn btn-danger float-end">Back</a>
                                                <button type="submit" class="btn btn-primary float-end mx-2">
                                                    Save</button>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
