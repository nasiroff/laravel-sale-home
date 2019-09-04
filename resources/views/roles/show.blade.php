@extends('layouts.app')
@section('content')
<div class="container">
<h2>Viewing <span class='muted'><?=$roles->id?></span></h2>
<br>	<p><strong>Type</strong>
	<?=$roles->type?><p>
<p>
	<a href="{{url('roles/edit/'.$roles->id)}}"> Edit</a> |
	<a href="{{url('roles')}}">Back</a>
</p>
</div>
@endsection