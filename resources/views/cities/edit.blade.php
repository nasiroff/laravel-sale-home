@extends('layouts.app')
@section('content')
<div class="container">
<h2>Edit <span class='muted'>Cities</span></h2>
<hr>
@include('cities._form', ['cities' => $cities, 'action'=> 'update'])
<p>
	<a href="{{url('cities/show/'.$cities->id)}}"> View</a> |
	<a href="{{url('cities')}}">Back</a>
</p>
</div>
@endsection