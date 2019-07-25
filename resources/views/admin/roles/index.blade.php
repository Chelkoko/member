@extends('layout.master')
@section('title','All Page')

@section('content')
	<div class="container col-md-8 col-md-offset-2">
		<div class="well">
			<table class="table table-bordered">
				<thead>
					<th>ID</th>
					<th>Name</th>
				</thead>
				<tbody>
					@foreach($roles as $role)
					<tr>
						<td>{{$role->id}}</td>
						<td>{{$role->name}}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
@endsection