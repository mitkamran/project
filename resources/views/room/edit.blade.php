@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
<div class="col-lg-12">
<h3>Update Rooms</h3>
</div>
</div>

@if($errors->any())

<div class="alert alert-danger">
<strong>Whoops!!</strong>There is some problem
<ul>
@foreach ($errors as $error)
<li>{{$error}}</li>
@endforeach
</ul>
</div>
@endif
<form action="{{route('room.update','$room->id')}}" method="post">
@csrf
@method('PUT')
<div class="row">

<div class="col-md-12">
<strong>Capacity</strong>
<input type="text" name="capacity" class="form-control" value="{{$room->capacity}}">
</div>

<div class="col-md-12">
<strong>RoomType</strong>
<input type="text" name="roomtype" class="form-control" value="{{$room->roomtype}}">
</div>

<div class="col-md-12">
<strong>About</strong>
<input type="text" name="about" class="form-control" value="{{$room->about}}">
</div>

<div class="col-md-12">
<a href="{{route('room.index')}}" class="btn btn-sm btn-success">Back</a>
<button type="submit" class="btn btn-sm btn-primary">Submit</button>
</div>
</div>
</form>
<div>
@endsection


