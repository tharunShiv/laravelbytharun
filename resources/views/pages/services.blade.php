@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="jumbotron">
            <div class="container" style="text-align:center">
                <h1>{{$title}}</h1>
                <p>This is the Laravel Demo Services Page.</p>
                @if(count($services) > 0)
                    <ul class="list-group">
                    @foreach($services as $service)
                        <li class="list-group-item">{{$service}}</li>
                    @endforeach
                    </ul>
                @endif
            </div>
        </div>
    </div>
@endsection
