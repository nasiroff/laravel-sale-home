@extends('layouts.app')
@section('content')
<div class="container">
<h2>Viewing <span class='muted'><?=$posts->id?></span></h2>
<br>	<p><strong>User Id</strong>
	<?=$posts->user_id?><p>
	<p><strong>City Id</strong>
	<?=$posts->city_id?><p>
	<p><strong>Address</strong>
	<?=$posts->address?><p>
	<p><strong>Title</strong>
	<?=$posts->title?><p>
	<p><strong>Desc</strong>
	<?=$posts->desc?><p>
	<p><strong>Post Type</strong>
	<?=$posts->post_type?><p>
	<p><strong>Room Count</strong>
	<?=$posts->room_count?><p>
	<p><strong>Home Type</strong>
	<?=$posts->home_type?><p>
	<p><strong>Area</strong>
	<?=$posts->area?><p>
	<p><strong>Price</strong>
	<?=$posts->price?><p>
	<p><strong>Status</strong>
	<?=$posts->status?><p>
	<p><strong>Email Allowed</strong>
	<?=$posts->email_allowed?><p>
<p>
	<a href="{{url('posts/edit/'.$posts->id)}}"> Edit</a> |
	<a href="{{url('posts')}}">Back</a>
</p>
</div>
@endsection