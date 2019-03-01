
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

		<div class="container">
			@if(isset($details))
			<h1 align="center"> We Know What You Want</h1>
			<h2 align="center">Rooms Details</h2>
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
	<a href="about" align="center"><h2><button>Go Back</button></h2></a>	
</body>
</html>
