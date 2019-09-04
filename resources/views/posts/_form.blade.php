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
  $action = $action == 'update' ? $action.'/'.$posts->id : $action; 
?>
<form action="<?= url('posts/'.$action) ?>" method="POST" class="form-horizontal">
<?= $method ?>
	<fieldset>
    		<div class="form-group"><label class="control-label">User Id</label>
		<input type="datetime" name="user_id" value ="<?= isset($posts) ? $posts->user_id : ''?>" required ='required' class="col-md-4 form-control" placeholder="User Id"></div>
		<div class="form-group"><label class="control-label">City Id</label>
		<input type="datetime" name="city_id" value ="<?= isset($posts) ? $posts->city_id : ''?>" required ='required' class="col-md-4 form-control" placeholder="City Id"></div>
		<div class="form-group"><label class="control-label">Address</label>
		<input type="text" name="address" value ="<?= isset($posts) ? $posts->address : ''?>" required ='required' class="col-md-4 form-control" placeholder="Address"></div>
		<div class="form-group"><label class="control-label">Title</label>
		<input type="text" name="title" value ="<?= isset($posts) ? $posts->title : ''?>" required ='required' class="col-md-4 form-control" placeholder="Title"></div>
		<div class="form-group"><label class="control-label">Desc</label>
		<input type="datetime" name="desc" value ="<?= isset($posts) ? $posts->desc : ''?>" required ='required' class="col-md-4 form-control" placeholder="Desc"></div>
		<div class="form-group"><label class="control-label">Post Type</label>
		<input type="text" name="post_type" value ="<?= isset($posts) ? $posts->post_type : ''?>" required ='required' class="col-md-4 form-control" placeholder="Post Type"></div>
		<div class="form-group"><label class="control-label">Room Count</label>
		<input type="number" name="room_count" value ="<?= isset($posts) ? $posts->room_count : ''?>" required ='required' class="col-md-4 form-control" placeholder="Room Count"></div>
		<div class="form-group"><label class="control-label">Home Type</label>
		<input type="text" name="home_type" value ="<?= isset($posts) ? $posts->home_type : ''?>" required ='required' class="col-md-4 form-control" placeholder="Home Type"></div>
		<div class="form-group"><label class="control-label">Area</label>
		<input type="datetime" name="area" value ="<?= isset($posts) ? $posts->area : ''?>" required ='required' class="col-md-4 form-control" placeholder="Area"></div>
		<div class="form-group"><label class="control-label">Price</label>
		<input type="datetime" name="price" value ="<?= isset($posts) ? $posts->price : ''?>" required ='required' class="col-md-4 form-control" placeholder="Price"></div>
		<div class="form-group"><label class="control-label">Status</label>
		<input type="number" name="status" value ="<?= isset($posts) ? $posts->status : ''?>" required ='required' class="col-md-4 form-control" placeholder="Status"></div>
		<div class="form-group"><label class="control-label">Email Allowed</label>
		<input type="number" name="email_allowed" value ="<?= isset($posts) ? $posts->email_allowed : ''?>" required ='required' class="col-md-4 form-control" placeholder="Email Allowed"></div>

		<div class="form-group">
			<label class="control-label">&nbsp;</label>
			<input type="submit" value="Save" class="btn btn-primary">
		</div>
	</fieldset>
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
</form>