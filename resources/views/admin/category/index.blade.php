@extends('layout.master')

@section('title','Role Create')

@section('content')
	<div class="container col-md-8 col-md-offset-2">
		<div class="well">
			<table class="table table-bordered">
				<thead>
					<th>ID</th>
					<th>Name</th>
					<th>Generate</th>
				</thead>
				<tbody>
					@foreach($categories as $category)
						<tr>
							<td>{{$category->id}}</td>
							<td>{{$category->name}}</td>
							<td><a href="{{action('admin\CategoryController@edit',$category->id)}}">Edit</a></td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
@endsection 