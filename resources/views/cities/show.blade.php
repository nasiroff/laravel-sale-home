@extends('layouts.app')
@section('content')
<div class="container">
<h2>Viewing <span class='muted'><?=$cities->id?></span></h2>
<br>	<p><strong>Name</strong>
	<?=$cities->name?><p>
<p>
	<a href="{{url('cities/edit/'.$cities->id)}}"> Edit</a> |
	<a href="{{url('cities')}}">Back</a>
</p>
</div>
@endsection