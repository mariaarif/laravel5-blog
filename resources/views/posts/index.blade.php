@extends('master')

@section('content')


<table class="table table-striped">
	<thead>
		<tr>
		 <td>Title</td>
		</tr> 
	</thead>

	<tbody>
		
		@foreach ($posts as $post)

		<tr>
			<td><a href="/posts/{{ $post->id}}">{{ $post->title }}</a></td>
			<td>{{ str_limit($post->content, 20)}}</td>
			<td>{{ $post->category->title}}</td>
			
			{!! Form::model($post, array('route' => array('posts.destroy', $post->id), 'method' => 'delete')) !!}		

			<td><a href="{{ route('posts.edit', ['posts'=>$post->id])}}">Edit</a>
			{!! Form::submit('Delete', ['class'=>'btn btn-sm btn-danger']) !!}
			{!! Form::close()  !!}
            </td>
		</tr>

		@endforeach
	</tbody>


</table>

@stop



