@extends('layouts.app')

@section('content')
    <div class="container bg-white">
        <div class="row justify-content-center">

            <div class="col-6">
                @if (session('success'))
                    <div class="alert alert-success" role="alert" id="successMessage">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="card">
                    <div class="card-header">{{ __('Create Post') }}</div>

                    <div class="card-body bg-white">

                        <div class="">
                            <form method="POST" action="{{ route('post_store') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="title">Post Title</label>
                                    <input type="text" name="title" class="form-control mt-1 bg-white" id="title"
                                        placeholder="Enter Post Title" required>
                                </div>
                                <div class="form-group mt-2">
                                    <label for="description">Post Description</label>
                                    <textarea type="text" name="description" class="form-control mt-1 bg-white" id="description" rows="6"
                                        placeholder="Enter Description" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary mt-2">Create Post</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        
    </div>

    <script>
        setTimeout(function() {
            document.getElementById('successMessage').style.display = 'none';
        }, 2000);
    </script>
@endsection
