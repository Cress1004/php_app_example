@extends('layouts.app')
@section('content')
<h1>Services Page</h1>
<a>{{$title}}</a>
@if(count($services) > 0)
    <ul>
        @foreach ($services as $service)
            <li>
                {{$service}}
            </li>
        @endforeach
    </ul>
@endif
@endsection