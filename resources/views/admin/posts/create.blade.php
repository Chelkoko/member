@extends('layout.master')

@section('title','Create Post')

@section('content')
	<div class="container col-md-8 col-md-offset-2">
		<div class="well">
			<form method="post">
			<legend>Create A Post</legend>
			@foreach($errors->all() as $error)
				<p class="alert alert-danger">{{$error}}</p>
			@endforeach
			@if(session('status'))
				<p class="alert alert-success">{{session('status')}}</p>
			@endif
			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<input type="hidden" name="user_id" value="{{$user->id}}">
			  <div class="form-group">
			    <label for="fortitle">Title</label>
			    <input type="text" class="form-control" id="fortitle" placeholder="Title" name="title">
			  </div>
			  <div class="form-group">
			    <textarea class="form-control" rows="3" name="content"></textarea>
			  </div>
			  <div class="form-group">
			    <select class="form-control" name="cat_id">
			     @foreach($categories as $category)
			     	<option value="{{$category->id}}">{{$category->name}}</option>
			     @endforeach
			    </select>
			  </div>
			  <button type="submit" class="btn btn-primary">Create</button>
			</form>
		</div>
	</div>
@endsection