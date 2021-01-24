@extends('layouts.app')

@section('content')
    <h1>All Posts</h1>
    @if ($posts->count() > 0)
        <div class="card">
            <ul class="list-group list-group-flush">
                @foreach ($posts as $post)
                    <li class="list-group-item">
                        <h4><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h4>
                        <small>Created at: {{ $post->created_at }}</small>
                    </li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection
