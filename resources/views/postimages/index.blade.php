@extends('layouts.app')
@section('content')
<div class="container">
<h2>Listing <span class='muted'>Post images</span></h2>
<a href="<?=url('postimages/create')?>" class = "btn btn-success btn-sm"><i class="glyphicon glyphicon-plus"></i> Create postimages</a>
<hr>
@if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif
<?php if (isset($postimages)): ?>

<table class="table table-striped">
	<thead>
		<tr>
			<th>Post Id</th>
			<th>Image Path</th>
			<th width="20%">&nbsp;</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($postimages as $item): ?>
		<tr>
			<td><?= $item->post_id ?></td>
			<td><?= $item->image_path ?></td>
			<td>
				<div class="btn-toolbar">
					<div class="btn-group">
						<a href="<?=url('postimages/show/'.$item->id)?>" class = "btn btn-info btn-sm"><i class="glyphicon glyphicon-eye-open"></i> View</a>
						<a href="<?=url('postimages/edit/'.$item->id)?>" class = "btn btn-warning btn-sm"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
						<a href="<?=url('postimages/delete/'.$item->id)?>" class = "btn btn-danger btn-sm" onclick = "return confirm('Are you sure?')"><i class="glyphicon glyphicon-trash"></i> Delete</a>
					</div>
				</div>

			</td>
		</tr>
<?php endforeach; ?>
	</tbody>
</table>

<?php else: ?>

<p>No postimages . </p>

<?php endif; ?>

</div>
@endsection