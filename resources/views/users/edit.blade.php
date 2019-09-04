@extends('layouts.app')
@section('content')
<div class="container">
<h2>Edit <span class='muted'>Users</span></h2>
<hr>
@include('users._form', ['users' => $users, 'action'=> 'update'])
<p>
	<a href="{{url('users/show/'.$users->id)}}"> View</a> |
	<a href="{{url('users')}}">Back</a>
</p>
</div>
@endsection