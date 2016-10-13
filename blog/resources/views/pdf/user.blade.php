
<html>
<h1>List of Users</h1>
<body>
	<table style="border: 1px solid #dddddd">
		<thead>
			<tr>
			<th style="border: 1px solid #dddddd">ID</th>
			<th style="border: 1px solid #dddddd">Name</th>
			<th style="border: 1px solid #dddddd">Email</th>
			</tr>
		</thead>
	
		<tbody>
			@foreach($users as $key => $user)
			<tr style="border: 1px solid #dddddd">
				<td style="border: 1px solid #dddddd">{{$user->id}}</td>
				<td style="border: 1px solid #dddddd">{{$user->name}}</td>
				<td style="border: 1px solid #dddddd">{{$user->email}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</body>
</html>


