@extends('master')

@section('content')


<a href="/categories/create" class="btn btn-primary">Add Category</a>

<table class="table table-striped">
	<thead>
		<tr>
		 <td>Title</td>
		</tr> 
	</thead>

	<tbody>
		
		   @foreach ($categories as $category)
        <tr>
          <td>{{ $category->title }}</td>
         
          <td>
            {!! Form::model($category, array('route' => array('categories.destroy', $category->id), 'method' => 'delete')) !!}
              <a href="{{ route('categories.edit', ['categories'=>$category->id]) }}">Edit</a>
              {!! Form::submit('Delete', ['class'=>'btn btn-sm btn-danger js-submit-confirm']) !!}
            {!! Form::close() !!}
          </td>
        </tr>
    @endforeach
	</tbody>


</table>

@stop



