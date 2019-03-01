@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
<div class="col-md-12">
<h3>Details</h3>
<hr>
</div>
<div class="row">
<div class="col-md-12">
<div class="form-group">
<strong>Capacity : </strong> {{$room->capacity}}
</div>
</div>
<div class="col-md-12">
<div class="form-group">
<strong>RoomType : </strong> {{$room->roomtype}}
</div>
</div>
<div class="col-md-12">
<div class="form-group">
<strong>About : </strong> {{$room->about}}
</div>
</div>
<div class="col-md-12">
<a href="{{route('room.index')}}" class="btn btn-sm btn-success">Back</a>
</div>
</div>
</div>

@endsection