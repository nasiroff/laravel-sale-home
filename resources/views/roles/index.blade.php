@extends('layouts.app')
@section('content')
<div class="container">
<h2>Listing <span class='muted'>Roles</span></h2>
<a href="<?=url('roles/create')?>" class = "btn btn-success btn-sm"><i class="glyphicon glyphicon-plus"></i> Create roles</a>
<hr>
@if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif
<?php if (isset($roles)): ?>

<table class="table table-striped">
	<thead>
		<tr>
			<th>Type</th>
			<th width="20%">&nbsp;</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($roles as $item): ?>
		<tr>
			<td><?= $item->type ?></td>
			<td>
				<div class="btn-toolbar">
					<div class="btn-group">
						<a href="<?=url('roles/show/'.$item->id)?>" class = "btn btn-info btn-sm"><i class="glyphicon glyphicon-eye-open"></i> View</a>
						<a href="<?=url('roles/edit/'.$item->id)?>" class = "btn btn-warning btn-sm"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
						<a href="<?=url('roles/delete/'.$item->id)?>" class = "btn btn-danger btn-sm" onclick = "return confirm('Are you sure?')"><i class="glyphicon glyphicon-trash"></i> Delete</a>
					</div>
				</div>

			</td>
		</tr>
<?php endforeach; ?>
	</tbody>
</table>

<?php else: ?>

<p>No roles . </p>

<?php endif; ?>

</div>
@endsection