@extends('layouts.app')
@section('content')
<div class="container">
<h2>Edit <span class='muted'>Post images</span></h2>
<hr>
@include('postimages._form', ['postimages' => $postimages, 'action'=> 'update'])
<p>
	<a href="{{url('postimages/show/'.$postimages->id)}}"> View</a> |
	<a href="{{url('postimages')}}">Back</a>
</p>
</div>
@endsection