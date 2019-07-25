@extends('layout.master')

@section('title','Login')

@section('content')
	<div class="container">
		<div class="col-md-8 col-md-offset-2">
			<div class="well well bs-component">
				<form method="post">
				<legend>login form</legend>
				@foreach($errors->all() as $error)
					<p class="alert alert-danger">{{$error}}</p>
				@endforeach
				{{csrf_field()}}
				  <div class="form-group">
				    <label for="email">Email</label>
				    <input type="email" class="form-control" id="email" placeholder="Email" name="email">
				  </div>
				  <div class="form-group">
				    <label for="password">Password</label>
				    <input type="password" class="form-control" id="password" name="password">
				  </div>
	
				  <div class="checkbox">
				    <label>
				      <input type="checkbox">Remember me
				    </label>
				  </div>
				  <button type="submit" class="btn btn-primary">Login</button>
				</form>
			</div>
		</div>
	</div>
@endsection