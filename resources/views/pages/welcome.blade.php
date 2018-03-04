@extends('main')
@section('title',  '| Homepage')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <h1 class="display-4">Welcome to my Blog</h1>
                    <p class="lead">Thanks for visiting my developmental blog.</p>
                    <p> <a class="btn btn-primary btn-lg" href="#" role="button">Popular Posts</a></p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">

        </div>
        <div class="col-md-3">
            Side Bar
        </div>

           @foreach ($posts as $post)
            <div class="post">
                <h3>{{ $post->title }}</h3>
                <p> {{ $post->body }}</p>
                <a href="{{ url('blog/'.$post->slug) }}" class="btn btn-primary">Read More</a>
                <hr>

            @endforeach
            </div>


    </div>
@endsection