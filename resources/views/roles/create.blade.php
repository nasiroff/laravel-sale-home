@extends('layouts.app')
@section('content')
<div class="container">
<h2>Create <span class='muted'>Roles</span></h2>
<hr>

@include('roles._form', ['action'=> 'store'])

<p><a href="{{url('roles')}}">Back</a></p>
</div>
@endsection