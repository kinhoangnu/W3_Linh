@extends('main')

@section('title', '| Edit Blog Posts')

@section('stylesheets')

	{!!Html::style('css/select2.min.css')!!}

@endsection

@section('content')
<div class="row">
{!!Form::model($user, ['route'=>['profile.update', $user->id], 'method' => 'GET', 'files' => true]) !!}
	<div class="col-md-8">
	{{Form::label('name', 'Name:')}}
	{{Form::text('name', null, ["class"=>'form-control input-lg'])}}
	{{Form::label('email','Email:')}}
	{{Form::text('email',null, ['class'=>'form-control input-lg'])}}
	{{Form::label('featured_image', 'Upload Picture:')}}
	{{Form::file('featured_image')}}

	</div>
	<div class="col-md-4">
		<div class="row">
		 	<div class="col-sm-6">
		 	     {!! Html::linkRoute('profile.show', 'Cancel', array($user->id), array('class'=>'btn btn-danger btn-block'))!!}
		 	</div>
		 	<div class="col-sm-6">
             {{Form::submit('Save', ['class'=>'btn btn-success btn-block'])}}
		 	</div>
		 </div>
	</div>
	@endsection