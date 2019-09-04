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
  $action = $action == 'update' ? $action.'/'.$users->id : $action; 
?>
<form action="<?= url('users/'.$action) ?>" method="POST" class="form-horizontal">
<?= $method ?>
	<fieldset>
    		<div class="form-group"><label class="control-label">First Name</label>
		<input type="text" name="first_name" value ="<?= isset($users) ? $users->first_name : ''?>" required ='required' class="col-md-4 form-control" placeholder="First Name"></div>
		<div class="form-group"><label class="control-label">Last Name</label>
		<input type="text" name="last_name" value ="<?= isset($users) ? $users->last_name : ''?>" required ='required' class="col-md-4 form-control" placeholder="Last Name"></div>
		<div class="form-group"><label class="control-label">Email</label>
		<input type="email" name="email" value ="<?= isset($users) ? $users->email : ''?>" required ='required' class="col-md-4 form-control" placeholder="Email"></div>
		<div class="form-group"><label class="control-label">Email Verified At</label>
		<input type="datetime" name="email_verified_at" value ="<?= isset($users) ? $users->email_verified_at : ''?>"  class="col-md-4 form-control" placeholder="Email Verified At"></div>
		<div class="form-group"><label class="control-label">Password</label>
		<input type="text" name="password" value ="<?= isset($users) ? $users->password : ''?>" required ='required' class="col-md-4 form-control" placeholder="Password"></div>
		<div class="form-group"><label class="control-label">Role Id</label>
		<input type="datetime" name="role_id" value ="<?= isset($users) ? $users->role_id : ''?>" required ='required' class="col-md-4 form-control" placeholder="Role Id"></div>
		<div class="form-group"><label class="control-label">Remember Token</label>
		<input type="text" name="remember_token" value ="<?= isset($users) ? $users->remember_token : ''?>"  class="col-md-4 form-control" placeholder="Remember Token"></div>

		<div class="form-group">
			<label class="control-label">&nbsp;</label>
			<input type="submit" value="Save" class="btn btn-primary">
		</div>
	</fieldset>
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
</form>