@extends('layouts.app')
@section('content')
<div class="container">
<h2>Create <span class='muted'>Posts</span></h2>
<hr>

@include('posts._form', ['action'=> 'store'])

<p><a href="{{url('posts')}}">Back</a></p>
</div>
@endsection