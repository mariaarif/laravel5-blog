@extends('master')



@section('content')



{!!  Form::open(['route'=>'categories.store'])!!}


<legend>New Category</legend>




@include('categories._form')

  
{!! Form::submit('Add Category', ['class'=>'btn btn-primary']) !!}

	


{!! Form::close() !!}


@stop