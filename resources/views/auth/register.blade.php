@extends('layout.master')

@section('title','Register Page')

@section('content')
	<div class="container">
		<div class="col-md-8 col-md-offset-2">
			<div class="well">
				<form method="post">
				<legend>Register Page</legend>
				@foreach($errors->all() as $error)
					<p class="alert alert-danger">{{$error}}</p>
				@endforeach
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				  <div class="form-group">
				    <label for="username">User Name</label>
				    <input type="text" class="form-control" id="username" placeholder="User Name" name="name">
				  </div>
				  <div class="form-group">
				    <label for="email">Email</label>
				    <input type="email" class="form-control" id="email" placeholder="Email" name="email">
				  </div>
				  <div class="form-group">
				    <label for="password">Password</label>
				    <input type="password" class="form-control" id="password" name="password">
				  </div>
				  <div class="form-group">
				    <label for="password">Confirm Password</label>
				    <input type="password" class="form-control" id="password" name="password_confirmation">
				  </div>
				  <!-- <div class="form-group">
				    <label for="exampleInputFile">File input</label>
				    <input type="file" id="exampleInputFile">
				    <p class="help-block">Example block-level help text here.</p>
				  </div> -->
				  <!-- <div class="checkbox">
				    <label>
				      <input type="checkbox"> Check me out
				    </label>
				  </div> -->
				  <button type="submit" class="btn btn-primary">Register</button>
				</form>
			</div>
		</div>
	</div>

@endsection