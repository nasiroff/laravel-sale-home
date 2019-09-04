@extends('layouts.app')
@section('content')
<div class="container">
<h2>Viewing <span class='muted'><?=$postimages->id?></span></h2>
<br>	<p><strong>Post Id</strong>
	<?=$postimages->post_id?><p>
	<p><strong>Image Path</strong>
        <img src="{{ \Illuminate\Support\Facades\Storage::url($postimages->image_path) }}" alt=""><p>
<p>
	<a href="{{url('postimages/edit/'.$postimages->id)}}"> Edit</a> |
	<a href="{{url('postimages')}}">Back</a>
</p>
</div>
@endsection
