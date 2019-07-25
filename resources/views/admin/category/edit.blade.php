@extends('layout.master')

@section('title','Edit Category')

@section('content')
	<div class="container col-md-8 col-md-offset-2">
		<div class="well">
		<legend>Edit Category</legend>
			<form method="post">
			{{csrf_field()}}
			@foreach($errors->all() as $error)
				<p class="alert alert-danger">{{$error}}</p>
			@endforeach
			@if(session('status'))
			<p class="alert alert-success">{{session('status')}}</p>
			@endif
			  <div class="form-group">
			    <label for="Categoryname">Category Name</label>
			    <input type="text" class="form-control" id="Categoryname" name="name" value="{{$category->name}}">
			  </div>
			  <button type="submit" class="btn btn-primary">Edit</button>
			</form>
		</div>
	</div>
@endsection