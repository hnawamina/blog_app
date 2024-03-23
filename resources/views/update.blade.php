@extends('layouts.app')

@section('content')
    <div class="container bg-white">
        <div class="row justify-content-center">

            <div class="col-8">
                @if (session('message'))
                    <div class="alert alert-success" role="alert" id="successMessage">
                        {{ session('message') }}
                    </div>
                @endif

                <div class="card">
                    <div class="card-header">{{ __('Update Post') }}</div>

                    <div class="card-body bg-white">

                        <div class="">
                            <form method="POST" action="{{ route('post_update',$showPost->id) }}">
                                @csrf
                                {{-- <div class="form-group">
                                    <label for="title">ID</label>
                                    <input type="text" name="id" class="form-control mt-1 bg-white" id="id" value="{{$showPost->id}}"
                                         required>
                                </div> --}}
                                <div class="form-group">
                                    <label for="title">Post Title</label>
                                    <input type="text" name="title" class="form-control mt-1 bg-white" id="title"
                                        value="{{ $showPost->title }}" required>
                                </div>
                                <div class="form-group mt-2">
                                    <label for="description">Post Description</label>
                                    <textarea name="description" class="form-control mt-1 bg-white" id="description" rows="8" required>{{ $showPost->description }}</textarea>
                                </div>
                                <button type="submit" class="btn btn-primary mt-2">Update</button>
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
