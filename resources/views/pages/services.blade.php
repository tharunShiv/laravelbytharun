@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="jumbotron">
            <h1>{{$title}}</h1>
            <p>This is the Laravel Demo Services Page.</p>
            @if(count($services) > 0)
                <ul>
                @foreach($services as $service)
                    <li>{{$service}}</li>
                @endforeach
                </ul>
            @endif
        </div>
    </div>
@endsection
