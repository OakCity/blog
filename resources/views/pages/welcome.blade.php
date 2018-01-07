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
                <div class="post">
                    <h3>Post Title</h3>
                    <p>Lorem ipsem ........sdfasfasdfsdfasdfasdfasdfasdf</p>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>
            <hr>
            <div class="post">
                <h3>Post Title</h3>
                <p>Lorem ipsem ........sdfasfasdfsdfasdfasdfasdfasdf</p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>
            <hr>
            <div class="post">
                <h3>Post Title</h3>
                <p>Lorem ipsem ........sdfasfasdfsdfasdfasdfasdfasdf</p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>
            <hr>
            <div class="post">
                <h3>Post Title</h3>
                <p>Lorem ipsem ........sdfasfasdfsdfasdfasdfasdfasdf</p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>
            <hr>
            <div class="post">
                <h3>Post Title</h3>
                <p>Lorem ipsem ........sdfasfasdfsdfasdfasdfasdfasdf</p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>
        </div>
        <div class="col-md-3 col-md-offset-1">
            Side Bar
        </div>
    </div>
@endsection