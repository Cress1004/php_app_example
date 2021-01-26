@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <hr>
                        <a href='/posts/create' class='btn btn-primary'>Create New Post</a><br><br>
                        <h4>All Your Posts: </h4>
                        @if (count($posts) > 0)
                            <table class="table table-striped">
                                <tr>
                                    <th>Title</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                @foreach ($posts as $post)
                                    <tr>
                                        <td>{{ $post->title }}</td>
                                        <td><a href='posts/{{ $post->id }}/edit' class='btn btn-default'>Edit this post</td>
                                        <td></td>
                                    </tr>
                                @endforeach
                            </table>
                        @else
                            <p>You have no post</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
