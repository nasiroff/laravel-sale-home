@extends('layouts.app')
@section('content')
<div class="container">
<h2>Edit <span class='muted'>Roles</span></h2>
<hr>
@include('roles._form', ['roles' => $roles, 'action'=> 'update'])
<p>
	<a href="{{url('roles/show/'.$roles->id)}}"> View</a> |
	<a href="{{url('roles')}}">Back</a>
</p>
</div>
@endsection