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

                            <form>
                                <div class="form-group ">
                                    <label for="">Post Title</label>
                                    <input type="text" class="form-control mt-1 bg-white" id=" ">
                                </div>
                                <div class="form-group mt-2 ">
                                    <label for=" ">Post Description</label>
                                    <textarea type="text" class="form-control mt-1 bg-white" id="" rows="6"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary mt-2">Submit</button>
                            </form>

                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
@endsection
