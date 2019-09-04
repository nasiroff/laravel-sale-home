@extends('layouts.app')
@section('content')
<div class="container">
<h2>Viewing <span class='muted'><?=$users->id?></span></h2>
<br>	<p><strong>First Name</strong>
	<?=$users->first_name?><p>
	<p><strong>Last Name</strong>
	<?=$users->last_name?><p>
	<p><strong>Email</strong>
	<?=$users->email?><p>
	<p><strong>Email Verified At</strong>
	<?=$users->email_verified_at?><p>
	<p><strong>Password</strong>
	<?=$users->password?><p>
	<p><strong>Role Id</strong>
	<?=$users->role_id?><p>
	<p><strong>Remember Token</strong>
	<?=$users->remember_token?><p>
<p>
	<a href="{{url('users/edit/'.$users->id)}}"> Edit</a> |
	<a href="{{url('users')}}">Back</a>
</p>
</div>
@endsection