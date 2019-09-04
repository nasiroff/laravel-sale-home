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
  $action = $action == 'update' ? $action.'/'.$postimages->id : $action; 
?>
<form action="<?= url('postimages/'.$action) ?>" method="POST" class="form-horizontal">
<?= $method ?>
	<fieldset>
    		<div class="form-group"><label class="control-label">Post Id</label>
		<input type="datetime" name="post_id" value ="<?= isset($postimages) ? $postimages->post_id : ''?>" required ='required' class="col-md-4 form-control" placeholder="Post Id"></div>
		<div class="form-group"><label class="control-label">Image Path</label>
		<input type="text" name="image_path" value ="<?= isset($postimages) ? $postimages->image_path : ''?>" required ='required' class="col-md-4 form-control" placeholder="Image Path"></div>

		<div class="form-group">
			<label class="control-label">&nbsp;</label>
			<input type="submit" value="Save" class="btn btn-primary">
		</div>
	</fieldset>
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
</form>