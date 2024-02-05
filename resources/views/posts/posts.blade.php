<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Manage Posts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4> World News
                                            <a href="{{ url('posts/create') }}" class="btn btn-primary float-end">Create
                                                Post</a>

                                        </h4>
                                    </div>
                                    <div class="card-body">
                                        <table class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Title</th>
                                                    <th>Content</th>
                                                    <th>Created_At</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($posts as $data)
                                                    <tr>
                                                        <td>{{ $data->id }}</td>
                                                        <td>{{ $data->title }}</td>
                                                        <td>{{ $data->content }}</td>
                                                        <td>{{ $data->created_at }}</td>
                                                        <td>
                                                            <a
                                                                href="{{ url('posts/' . $data->id . '/edit') }}"class="btn btn-success">Edit</a>

                                                            <a href="{{ url('posts/' . $data->id . '/delete') }}"class="btn btn-danger"
                                                                onclick="return confirm('Are you sure on deleting this post?')">
                                                                Delete

                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
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
