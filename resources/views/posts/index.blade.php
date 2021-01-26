@extends('layouts.app')

@section('content')
    <h1>All Posts</h1>
    @if ($posts->count() > 0)
        <div class="card">
            <ul class="list-group list-group-flush">
                @foreach ($posts as $post)
                <div class="row">
                    <div class="col-md-4">
                    <img style="width: 100%" src="/storage/cover_image/{{$post->cover_image}}" alt=""> 
                    </div>
                    <div class="col-md-8">
                        <li class="list-group-item">
                            <h4><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h4>
                            <small>Created at: {{ $post->created_at }}</small>
                        </li>
                    </div>
                </div>
                @endforeach
            </ul>
        </div>
    @endif
@endsection
