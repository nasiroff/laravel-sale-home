@extends('layouts.app')
@section('content')
<div class="container">
<h2>Listing <span class='muted'>Actions</span></h2>
<a href="<?=url('actions/create')?>" class = "btn btn-success btn-sm"><i class="glyphicon glyphicon-plus"></i> Create actions</a>
<hr>
@if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif
<?php if (isset($actions)): ?>

<table class="table table-striped">
	<thead>
		<tr>
			<th>Controller</th>
			<th>Method</th>
			<th width="20%">&nbsp;</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($actions as $item): ?>
		<tr>
			<td><?= $item->controller ?></td>
			<td><?= $item->method ?></td>
			<td>
				<div class="btn-toolbar">
					<div class="btn-group">
						<a href="<?=url('actions/show/'.$item->id)?>" class = "btn btn-info btn-sm"><i class="glyphicon glyphicon-eye-open"></i> View</a>
						<a href="<?=url('actions/edit/'.$item->id)?>" class = "btn btn-warning btn-sm"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
						<a href="<?=url('actions/delete/'.$item->id)?>" class = "btn btn-danger btn-sm" onclick = "return confirm('Are you sure?')"><i class="glyphicon glyphicon-trash"></i> Delete</a>
					</div>
				</div>

			</td>
		</tr>
<?php endforeach; ?>
	</tbody>
</table>

<?php else: ?>

<p>No actions . </p>

<?php endif; ?>

</div>
@endsection