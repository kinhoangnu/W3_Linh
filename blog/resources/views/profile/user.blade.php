@extends('main')

@section('title', "| User Profile")

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-1">
			<img src="{{ asset('image_profile/'.$user->picture) }}" > 
		</div>
		<div class="col-md-6 col-md-offset-1">
				
			<b>Username: {{$user->name}}</b><br>	
			<b>User ID: {{$user->id}}</b><br>
			<b>User's email address: {{$user->email}}</b><br>
			<a href="{{route('profile.edit', $user->id)}}" class="btn btn-default btn-sm">Edit</a>		
		</div>
		
	</div>


</div>




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