@extends('layouts.app')
@section('content')

<div class="container">
<div class="row">
<div class="col-md-10">
<h3>List Rooms</h3>
</div>
<div class="col-sm-2">
<a class="btn btn-sm btn-success" href="{{ route ('room.create')}}">Create New Rooms</a>
</div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
<p>{{$message}}</p>
</div>
@endif

<table class="table table-hover table-sm">
<tr>
<th width = "50px"><b>No.</b></th>
<th width = "300px"><b>Capacity.</b></th>
<th>Type</th>
<th>About</th>
<th width =" 180px">Action</th>
</tr>

@foreach ($rooms as $room)
<tr>
<th>{{++$i}}.</b></th>
<th>{{$room->capacity}}</th>
<th>{{$room->roomtype}}</th>
<th>{{$room->about}}</th>

<th>
<form action="{{ route('room.destroy', $room->id)}}" method="post">
<a class="btn btn-sm btn-success"  href="{{route('room.show',$room->id)}}">Show</a>
<a class="btn btn-sm btn-success"  href="{{route('room.edit',$room->id)}}">Edit</a>
@csrf
@method('DELETE');
<button type="submit" class="btn btn-sm btn-danger">Delete</button>
</form>
</th>
</tr>
@endforeach
</table>

{!! $rooms->links()!!}
</div>

@endsection
