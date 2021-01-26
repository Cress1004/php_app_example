@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-default">Go Back</a>
    <div class="row">
        <div class="col-md-4">
            <img style="width: 100%" src="/storage/cover_image/{{ $post->cover_image }}" alt="">
        </div>
        <div class="col-md-1">
        </div>
        <div class="col-md-7">
            <h1>{{ $post->title }}</h1>
            <p>{{ $post->body }}</p>
            <small>Created at: {{ $post->created_at }}</small>
            <hr>
            @if (!Auth::guest())
                @if (Auth::user()->id == $post->user_id)
                    <a href="/posts/{{ $post->id }}/edit" class="btn btn-default">Edit</a>
                    {!! Form::open(['action' => ['App\Http\Controllers\PostsController@destroy', $post->id], 'method' => 'POST',
                    'class' => 'pull-right']) !!}
                    {!! Form::hidden('_method', 'DELETE') !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                @endif
            @endif
        </div>
    </div>
@endsection
