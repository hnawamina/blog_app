@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-6 ">
                <div class="card">
                    <div class="card-header">{{ __('Creat Post') }}</div>

                    <div class="card-body bg-white">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="">

                            <form method="POST" action="{{ route('post_store') }}">
                                @csrf
                                <div class="form-group ">
                                    <label for="">Post Title</label>
                                    <input type="text" name="title" class="form-control mt-1 bg-white" id=" "
                                        placeholder="Enter Post Title">
                                </div>
                                <div class="form-group mt-2 ">
                                    <label for=" ">Post Description</label>
                                    <textarea type="text" name="description" class="form-control mt-1 bg-white" id="" rows="6"
                                        placeholder="Enter Description"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary mt-2">Creat Post</button>
                            </form>

                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
@endsection
