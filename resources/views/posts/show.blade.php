@extends('layouts.app')

@section('content')
 <a href="/posts" class="btn btn-default" style="margin-bottom:10px;">Go Back</a>
 <div class="well">
    <h1>{{$post->title}}</h1>
    <p>{!!$post->body !!}</p>
    <small>{{$post->created_at}}</small>
 <div>
 
 
@endsection