@extends('layout.master')

@section('title','Role Create')

@section('content')
	<div class="container col-md-8 col-md-offset-2">
		<div class="well well bs-component">
			<form method="post">
			@foreach($errors->all() as $error)
			<p class="alert alert-danger">{!!$error!!}</p>
			@endforeach
			@if(session('status'))
			<p class="alert alert-success">{{session('status')}}</p>
			@endif
			<legend>Role Insert</legend>
			{{csrf_field()}}
			  <div class="form-group">
			    <label for="name">Role</label>
			    <input type="text" class="form-control" name="name" id="name" placeholder="Role Name">
			  </div>
			  <button type="submit" class="btn btn-primary">Insert</button>
			</form>
		</div>
	</div>
@endsection 