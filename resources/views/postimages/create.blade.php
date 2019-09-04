@extends('layouts.app')
@section('content')
<div class="container">
<h2>Create <span class='muted'>Post images</span></h2>
<hr>

@include('postimages._form', ['action'=> 'store'])

<p><a href="{{url('postimages')}}">Back</a></p>
</div>
@endsection