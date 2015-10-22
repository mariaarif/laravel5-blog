@extends('master')



@section('content')


<legend>New Post</legend>

@include('posts._form')

  
{!! Form::submit('Publish', ['class'=>'btn btn-primary']) !!}

	


{!! Form::close() !!}


@stop