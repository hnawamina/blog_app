@extends('layouts.app')

@section('content')
    <div class="container">
        @if(session('success'))
            <div class="alert alert-success" id="successMessage">{{ session('success') }}</div>
        @endif
        <div class="row">
            <div class="col-12 bg-white">
                <table class="table mt-1">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th class="col-2" scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($foundPost as $post)
                            <tr>
                                <th scope="row" class="bg-white">{{ $post->id }}</th>
                                <td class="bg-white">{{ $post->title }}</td>
                                <td class="bg-white">{{ $post->description }}</td>
                                <td class="bg-white">
                                    <a href="{{ route('post_updateview', $post->id) }}" class="btn btn-danger">Update</a>
                                    <a href="{{ route('post_delete', $post->id) }}" class="btn btn-warning">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>
        setTimeout(function() {
            document.getElementById('successMessage').style.display = 'none';
        }, 2000);
    </script>
@endsection
