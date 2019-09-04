@extends('layouts.app')
@section('content')
<div class="container">
<h2>Create <span class='muted'>Actions</span></h2>
<hr>

@include('actions._form', ['action'=> 'store'])

<p><a href="{{url('actions')}}">Back</a></p>
</div>
@endsection