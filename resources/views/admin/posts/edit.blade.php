@extends('layout.master')

@section('title','Edit A Post')

@section('content')
 	<div class="container col-md-8 col-md-offset-2">
 		<div class="well well bs-component">
 			<form method="post">
 			<legend>Edit A Post</legend>
 			@foreach($errors->all() as $error)
 				<p class="alert alert-danger">{{$error}}</p>
 			@endforeach
 			@if(session('status'))
 				<p class="alert alert-success">{{session('status')}}</p>
 			@endif
 			<input type="hidden" name="_token" value="{{csrf_token()}}">
 			  <div class="form-group">
 			    <label for="title">Title</label>
 			    <input type="text" class="form-control" id="title" name="title" value="{{$post->title}}">
 			  </div>
 			  <div class="form-group">
 			    <textarea class="form-control" rows="3" value="" name="content" >{{$post->content}}</textarea>
 			  </div>
 			  <div class="form-group">
 			    <select class="form-control" name="cat_id">
 			    @foreach($categories as $category)
 			      <option value="{{$category->id}}"
 			      @if($post->cat_id === $category->id)
 			      	selected="selected"
 			      @endif
 			      >{{$category->name}}</option>
		      	@endforeach
 			    </select>
 			  </div>
 			  <button type="submit" class="btn btn-primary">Edit</button>
 			</form>
 		</div>
 	</div>
@endsection