@extends('layout.master')

@section('title','Admin Panel')

@section('content')
	<div class="container col-md-8 col-md-offset-2">
		<div class="well">
			<div class="forusers">
				<h3>Users</h3>
				<a href="{{url('admin/users')}}">
					<button class="btn btn-primary">Edit User</button>
				</a>
				<a href="{{url('admin/roles/create')}}">
					<button class="btn btn-primary">Add Role</button>
				</a>

				<h3>Categories</h3>
				<a href="{{url('admin/category')}}">
					<button class="btn btn-primary">View Categories</button>
				</a>
				<a href="{{url('admin/category/create')}}">
					<button class="btn btn-primary">Add Category</button>
				</a>

				<h3>Posts</h3>
				<a href="#">
					<button class="btn btn-primary">View Posts</button>
				</a>
				<a href="{{url('postcreator/post/create')}}">
					<button class="btn btn-primary">Add Post</button>
				</a>
			</div>
		</div>
	</div>
@endsection