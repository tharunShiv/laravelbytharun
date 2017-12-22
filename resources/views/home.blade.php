@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                 
                <div class="panel-body">
                   <a class="btn btn-primary" href="/posts/create">Create a Post</a><br/><br/>
                    <h3>Your Blog Posts</h3>
                    @if(count($posts) > 0)
                        <table class="table table-striped">
                            <tr>
                                <th>Title</th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach($posts as $post)    
                                <tr>
                                    <td>{{$post->title}}</td>
                                    <td><a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a></td>
                                    <td>
                                         <!-- delete -->
                                            {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
                                                {{Form::hidden('_method', 'DELETE')}}
                                                {{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
                                            {!! Form::close()!!}
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    @else
                        <p>You have no posts</p>
                    @endif
                </div>   
            </div>
            {{$posts->links()}}
        </div>
    </div>
</div>
@endsection
