@extends('layout.master')

@section('title','Edit user')

@section('content')
	<div class="container col-md-8 col-md-offset-2">
		<div class="well well bs-component">
			<form method="post">
			{{csrf_field()}}
			@if(session('status'))
			<p class="alert alert-success">{{session('status')}}</p>
			@endif
			  <div class="form-group">
			    <label for="email">Email</label>
			    <input type="email" class="form-control" id="email" name="email" value="{{$user->email}}">
			  </div>
			  <div class="form-group">
			    <label for="name">Name</label>
			    <input type="text" class="form-control" id="name" name="name" value="{{$user->name}}">
			  </div>
			  <div class="form-group">
			    <select multiple class="form-control" name="role[]" multiple>
			      @foreach($roles as $role)
			      	<option value="{{$role->name}}" 
			      	@if(in_array($role->name,$selectedRoles))
			      	selected="selected" 
			      	@endif
			      	>{{$role->name}}</option>
			      @endforeach
			    </select>
			  </div>
			  <button type="submit" class="btn btn-primary">Edit</button>
			</form>
		</div>
	</div>
@endsection