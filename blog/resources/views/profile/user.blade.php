@extends('main')

@section('title', "| User Profile")

@section('content')

	<h2>Username: {{$user->name}}</h2>		
	<br>
	<h3>User ID: {{$user->id}}</h3>
	<br>
	<h3>User's email address: {{$user->email}}</h3>
	<br>
	<a href="{{route('profile.edit', $user->id)}}" class="btn btn-default btn-sm">Edit</a>



	<!-- <div class="col-md-2">
		<a href="{{route('posts.create')}}" class="btn btn-lg btn-block btn-primary btn-h1-spacing">
		Create New Post
		</a>
	</div>
	<div class="col-md-12">
		<hr>
	</div>
	<hr> -->
@endsection