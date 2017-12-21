@extends('layouts.app')

@section('content')
    <h1>POSTS</h1>
    @if(count($posts) > 0)
     @foreach($posts as $post)
                <div class="well">
                    <h3><a href="posts/{{$post->id}}">{{$post->title}}</a></h3>
                    <small>Written on {{$post->created_at}}</small>
                    <!-- <p>{{$post->body}}</p>   This is to print body here itself-->
                </div>
            @endforeach
        <!--PAGINATION-->
       {{$posts->links()}}
    @endif
@endsection