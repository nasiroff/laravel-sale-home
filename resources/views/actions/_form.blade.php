@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<?php
  $method = $action == 'update' ? '<input type="hidden" name="_method" value="PUT">' : '';
  $action = $action == 'update' ? $action.'/'.$actions->id : $action; 
?>
<form action="<?= url('actions/'.$action) ?>" method="POST" class="form-horizontal">
<?= $method ?>
	<fieldset>
    		<div class="form-group"><label class="control-label">Controller</label>
		<input type="text" name="controller" value ="<?= isset($actions) ? $actions->controller : ''?>" required ='required' class="col-md-4 form-control" placeholder="Controller"></div>
		<div class="form-group"><label class="control-label">Method</label>
		<input type="text" name="method" value ="<?= isset($actions) ? $actions->method : ''?>" required ='required' class="col-md-4 form-control" placeholder="Method"></div>

		<div class="form-group">
			<label class="control-label">&nbsp;</label>
			<input type="submit" value="Save" class="btn btn-primary">
		</div>
	</fieldset>
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
</form>