@extends('layouts.app')
@section('content')
<div class="container">
<h2>Edit <span class='muted'>Posts</span></h2>
<hr>
@include('posts._form', ['posts' => $posts, 'action'=> 'update'])
<p>
	<a href="{{url('posts/show/'.$posts->id)}}"> View</a> |
	<a href="{{url('posts')}}">Back</a>
</p>
</div>
@endsection