@extends('layouts.app')
@section('content')
<div class="container">
<h2>Listing <span class='muted'>Posts</span></h2>
<a href="<?=url('posts/create')?>" class = "btn btn-success btn-sm"><i class="glyphicon glyphicon-plus"></i> Create posts</a>
<hr>
@if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif
<?php if (isset($posts)): ?>

<table class="table table-striped">
	<thead>
		<tr>
			<th>User Id</th>
			<th>City Id</th>
			<th>Address</th>
			<th>Title</th>
			<th>Desc</th>
			<th>Post Type</th>
			<th>Room Count</th>
			<th>Home Type</th>
			<th>Area</th>
			<th>Price</th>
			<th>Status</th>
			<th>Email Allowed</th>
			<th width="20%">&nbsp;</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($posts as $item): ?>
		<tr>
			<td><?= $item->user_id ?></td>
			<td><?= $item->city_id ?></td>
			<td><?= $item->address ?></td>
			<td><?= $item->title ?></td>
			<td><?= $item->desc ?></td>
			<td><?= $item->post_type ?></td>
			<td><?= $item->room_count ?></td>
			<td><?= $item->home_type ?></td>
			<td><?= $item->area ?></td>
			<td><?= $item->price ?></td>
			<td><?= $item->status ?></td>
			<td><?= $item->email_allowed ?></td>
			<td>
				<div class="btn-toolbar">
					<div class="btn-group">
						<a href="<?=url('posts/show/'.$item->id)?>" class = "btn btn-info btn-sm"><i class="glyphicon glyphicon-eye-open"></i> View</a>
						<a href="<?=url('posts/edit/'.$item->id)?>" class = "btn btn-warning btn-sm"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
						<a href="<?=url('posts/delete/'.$item->id)?>" class = "btn btn-danger btn-sm" onclick = "return confirm('Are you sure?')"><i class="glyphicon glyphicon-trash"></i> Delete</a>
					</div>
				</div>

			</td>
		</tr>
<?php endforeach; ?>
	</tbody>
</table>

<?php else: ?>

<p>No posts . </p>

<?php endif; ?>

</div>
@endsection