
<!DOCTYPE html>
<html>
<head>
<br><br>
<title>Search</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"
	href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<form action="/searchroom" method="POST" role="searchroom">
			{{ csrf_field() }}
			<div class="input-group">
				<input type="text" class="form-control" name="q"
					placeholder="Search Room"> <span class="input-group-btn">
					<button type="submit" class="btn btn-default">
						<span class="glyphicon glyphicon-search"></span>
					</button>
				</span>
			</div>
		</form>
		<div class="container">
			@if(isset($details))
			<p> The Search results for your query <b> {{ $query }} </b> are :</p>
			<h2>Rooms Details</h2>
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Capacity</th>
						<th>RoomType</th>
						<th>About</th>
					</tr>
				</thead>
				<tbody>
					@foreach($details as $user)
					<tr>
						<td>{{$user->capacity}}</td>
						<td>{{$user->roomtype}}</td>
						<td>{{$user->about}}</td>
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
