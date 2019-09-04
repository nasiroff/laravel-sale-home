@extends('layouts.app')
@section('content')
<div class="container">
<h2>Edit <span class='muted'>Actions</span></h2>
<hr>
@include('actions._form', ['actions' => $actions, 'action'=> 'update'])
<p>
	<a href="{{url('actions/show/'.$actions->id)}}"> View</a> |
	<a href="{{url('actions')}}">Back</a>
</p>
</div>
@endsection