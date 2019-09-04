@extends('layouts.app')
@section('content')
<div class="container">
<h2>Listing <span class='muted'>Users</span></h2>
<a href="<?=url('users/create')?>" class = "btn btn-success btn-sm"><i class="glyphicon glyphicon-plus"></i> Create users</a>
<hr>
@if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif
<?php if (isset($users)): ?>

<table class="table table-striped">
	<thead>
		<tr>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Email</th>
			<th>Email Verified At</th>
			<th>Password</th>
			<th>Role Id</th>
			<th>Remember Token</th>
			<th width="20%">&nbsp;</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($users as $item): ?>
		<tr>
			<td><?= $item->first_name ?></td>
			<td><?= $item->last_name ?></td>
			<td><?= $item->email ?></td>
			<td><?= $item->email_verified_at ?></td>
			<td><?= $item->password ?></td>
			<td><?= $item->role_id ?></td>
			<td><?= $item->remember_token ?></td>
			<td>
				<div class="btn-toolbar">
					<div class="btn-group">
						<a href="<?=url('users/show/'.$item->id)?>" class = "btn btn-info btn-sm"><i class="glyphicon glyphicon-eye-open"></i> View</a>
						<a href="<?=url('users/edit/'.$item->id)?>" class = "btn btn-warning btn-sm"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
						<a href="<?=url('users/delete/'.$item->id)?>" class = "btn btn-danger btn-sm" onclick = "return confirm('Are you sure?')"><i class="glyphicon glyphicon-trash"></i> Delete</a>
					</div>
				</div>

			</td>
		</tr>
<?php endforeach; ?>
	</tbody>
</table>

<?php else: ?>

<p>No users . </p>

<?php endif; ?>

</div>
@endsection