@if (Session::has('success'))
 <div class="alert alert-success" role="alert">
 	<strong>Success</strong> {{session::get('success')}}
 </div>


//content

@endif

@if (count($errors) > 0)
	<div class="alert alert-danger" role="alert">
		<strong>Error(s):</strong>
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
	
@endif