@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="jumbotron">
            <div class="container" style="text-align:center">
                <h1>{{$title}}</h1>
                <p>This is the Laravel Demo Index Page.</p>
                <p>
                <a class="btn btn-primary btn-lg" href="/login">Login</a>
                <a class="btn btn-success btn-lg" href="/register">Register</a>
                </p>
           </div>
        </div>
    </div>
@endsection
