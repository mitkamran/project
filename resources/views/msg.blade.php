
<!DOCTYPE html>
<html>
<head>
<title>Search</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"
	href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>

		<div class="container">
			@if(isset($details))
			
			<h2>Client Messages</h2>
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Name</th>
						<th>Email</th>
						<th>Subject</th>
                        <th>Messages</th>
					</tr>
				</thead>
				<tbody>
					@foreach($details as $user)
					<tr>
						<td>{{$user->name}}</td>
						<td>{{$user->email}}</td>
						<td>{{$user->subject}}</td>
						<td>{{$user->message}}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			@elseif(isset($message))
			<p>{{ $message }}</p>
			@endif
		</div>

</body>
</html>
