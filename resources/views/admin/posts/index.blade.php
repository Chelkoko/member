@extends('layout.master')

@section('title','All Post')

@section('content')
	<div class="container col-md-8 col-md-offset-2">
		<div class="well well bs-component">
			<table class="table table-bordered">
				<thead>
					<th>ID</th>
					<th>Title</th>
					<th>Content</th>
					<th>Edit</th>
				</thead>
				<tbody>
					@foreach($posts as $post)
						<tr>
							<td>{{$post->id}}</td>
							<td><a href="{{action('postcreator\PostController@show',$post->id)}}">{{$post->title}}</a></td>
							<td>{{$post->content}}</td>
							<td><a href="{{action('postcreator\PostController@edit',$post->id)}}">Edit</a></td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
@endsection