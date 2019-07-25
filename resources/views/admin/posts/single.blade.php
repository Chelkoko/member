@extends('layout.master')

@section('title','Single Show Post')

@section('content')
	<div class="container col-md-8 col-md-offset-2">



		<div class="panel panel-primary">
		  <div class="panel-heading">
		    <h3 class="panel-title">{{$post->title}}</h3>
		  </div>
		  <div class="panel-body">
		    {{$post->content}}
		  </div>
		</div>

				@foreach($comments as $comment)
				<p class="alert alert-success">{{$comment->content}}</p>	
				@endforeach

		<div class="panel panel-info">
		<form method="post" action="{{url('comment/create')}}">
			{{csrf_field()}}
			@if(session('success'))
				<p class="alert alert-success">{{session('success')}}</p>
			@endif
			<input type="hidden" name="user_id" value="{{Auth::user()->id}}">
			<input type="hidden" name="commendable_id" value="{{$post->id}}">
			<input type="hidden" name="commendable_type" value="App\Post">
			<div class="panel-heading">
				Insert Your Comment
			</div>
			<div class="panel-body">
				<textarea class="form-control" rows="3" name="comment"></textarea>
			</div>
			<button class="btn btn-primary">Submit</button>
		</form>
		</div>
	</div>
@endsection