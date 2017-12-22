@extends('layouts.app')

@section('content')
 <a href="/posts" class="btn btn-default" style="margin-bottom:10px;">Go Back</a>
 <div class="well">
    <h1>{{$post->title}}</h1>
    <p>{!!$post->body !!}</p>
    <small>Written at {{$post->created_at}} by {{$post->user->name}} </small>
 <div>
 <hr>
 @if(!Auth::guest())
    <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
    <!-- delete -->
    {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
    {!! Form::close()!!}
@endif
@endsection