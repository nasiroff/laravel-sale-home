@extends('layouts.app')
@section('content')
<div class="container">
<h2>Viewing <span class='muted'><?=$actions->id?></span></h2>
<br>	<p><strong>Controller</strong>
	<?=$actions->controller?><p>
	<p><strong>Method</strong>
	<?=$actions->method?><p>
<p>
	<a href="{{url('actions/edit/'.$actions->id)}}"> Edit</a> |
	<a href="{{url('actions')}}">Back</a>
</p>
</div>
@endsection