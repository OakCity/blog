@extends('main')
@section('title', '| Edit post')
@section('content')
{!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT']) !!}
<div class="form-row">
    <div class="col-md-8 mb-3">
        {{ Form::label('title', 'Title:') }}
        {{ Form::text('title', null, ["class" => 'form-spacing-top']) }}
        <hr>
        {{ Form::label('body', 'Your blog:') }}

    </div>
    <div class="col-md-8 mb-3">
        {{ Form::textarea('body', null, ["class" => 'form-control']) }}
    </div>
    <div class="col-md-4 mb-3">

        <div class="card">
            <div class="card-body">
                <dl class="dl-horizontal">
                    <dt>Created at:</dt>
                    <dd>{{ date('M j, Y - H:i', strtotime($post-> created_at))}}</dd>
                </dl>
                <dl class="dl-horizontal">
                    <dt>Last Updated:</dt>
                    <dd>{{ date('M j, Y - H:i', strtotime($post-> updated_at)) }}</dd>
                </dl>
                <hr/>
                <div class="row">
                    <div class="col-sm-6">
                        <!-- Laravel way to create an anchor element linked to a route -->
                        {{Form::submit('Save', ['class' => 'btn btn-success btn-block']) }}

                    </div>
                    <div class="col-sm-6">
                        {!! Html::linkRoute('posts.show', 'Cancel', array($post->id), array('class'=>'btn btn-danger btn-block')) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{!! Form::close()!!}
@endsection﻿