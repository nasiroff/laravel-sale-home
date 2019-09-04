@extends('layouts.app')
@section('content')
<div class="container">
<h2>Create <span class='muted'>Cities</span></h2>
<hr>

@include('cities._form', ['action'=> 'store'])

<p><a href="{{url('cities')}}">Back</a></p>
</div>
@endsection