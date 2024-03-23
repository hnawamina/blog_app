@extends('layouts.frontend')

@section('content')
    <div>
        <div class="container vh-100">
            <div class="row justify-content-center">
                <div class="card col-8 mt-5">
                    <div class="card-body">
                        <h5 class="card-title">{{$showPost->title}}</h5>
                        <p class="card-text">{{$showPost->description}}</p>
                        <p class="card-text">{{$showPost->created_at}}</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
