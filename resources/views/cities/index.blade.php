@extends('layouts.app')
@section('content')
<div class="container">
<h2>Listing <span class='muted'>Cities</span></h2>
<a href="<?=url('cities/create')?>" class = "btn btn-success btn-sm"><i class="glyphicon glyphicon-plus"></i> Create cities</a>
<hr>
@if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif
<?php if (isset($cities)): ?>

<table class="table table-striped">
	<thead>
		<tr>
			<th>Name</th>
			<th width="20%">&nbsp;</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($cities as $item): ?>
		<tr>
			<td><?= $item->name ?></td>
			<td>
				<div class="btn-toolbar">
					<div class="btn-group">
						<a href="<?=url('cities/show/'.$item->id)?>" class = "btn btn-info btn-sm"><i class="glyphicon glyphicon-eye-open"></i> View</a>
						<a href="<?=url('cities/edit/'.$item->id)?>" class = "btn btn-warning btn-sm"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
						<a href="<?=url('cities/delete/'.$item->id)?>" class = "btn btn-danger btn-sm" onclick = "return confirm('Are you sure?')"><i class="glyphicon glyphicon-trash"></i> Delete</a>
					</div>
				</div>

			</td>
		</tr>
<?php endforeach; ?>
	</tbody>
</table>

<?php else: ?>

<p>No cities . </p>

<?php endif; ?>

</div>
@endsection