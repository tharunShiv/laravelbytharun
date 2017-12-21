@extends('layouts.app')

@section('content')   <!--//laravelcollective and then edited -->
  
    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST']) !!}
      <div class="form-group">
            {{ Form::label('title', 'Title') }}
            {{ Form::text('title','',['class' => 'form-control', 'placeholder' => 'Title']) }}
      </div>
      <div class="form-group">
            {{ Form::label('body', 'Body') }}
            {{ Form::textarea('body','',['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text']) }}
      </div>
      {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}    
    {!! Form::close() !!}
@endsection