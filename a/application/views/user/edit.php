<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">User Edit</h3>
            </div>
			<?php echo form_open('user/edit/'.$user['account']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="name" class="control-label"><span class="text-danger">*</span>Name</label>
						<div class="form-group">
							<input type="text" name="name" value="<?php echo ($this->input->post('name') ? $this->input->post('name') : $user['name']); ?>" class="form-control" id="name" />
							<span class="text-danger"><?php echo form_error('name');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="email" class="control-label">Email</label>
						<div class="form-group">
							<input type="text" name="email" value="<?php echo ($this->input->post('email') ? $this->input->post('email') : $user['email']); ?>" class="form-control" id="email" />
							<span class="text-danger"><?php echo form_error('email');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="phone" class="control-label">Phone</label>
						<div class="form-group">
							<input type="text" name="phone" value="<?php echo ($this->input->post('phone') ? $this->input->post('phone') : $user['phone']); ?>" class="form-control" id="phone" />
							<span class="text-danger"><?php echo form_error('phone');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="gender" class="control-label"><span class="text-danger">*</span>Gender</label>
						<div class="form-group">
							<input type="text" name="gender" value="<?php echo ($this->input->post('gender') ? $this->input->post('gender') : $user['gender']); ?>" class="form-control" id="gender" />
							<span class="text-danger"><?php echo form_error('gender');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="birthday" class="control-label">Birthday</label>
						<div class="form-group">
							<input type="text" name="birthday" value="<?php echo ($this->input->post('birthday') ? $this->input->post('birthday') : $user['birthday']); ?>" class="has-datepicker form-control" id="birthday" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="permissionID" class="control-label"><span class="text-danger">*</span>PermissionID</label>
						<div class="form-group">
							<input type="text" name="permissionID" value="<?php echo ($this->input->post('permissionID') ? $this->input->post('permissionID') : $user['permissionID']); ?>" class="form-control" id="permissionID" />
							<span class="text-danger"><?php echo form_error('permissionID');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="pass" class="control-label"><span class="text-danger">*</span>Pass</label>
						<div class="form-group">
							<textarea name="pass" class="form-control" id="pass"><?php echo ($this->input->post('pass') ? $this->input->post('pass') : $user['pass']); ?></textarea>
							<span class="text-danger"><?php echo form_error('pass');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="address" class="control-label">Address</label>
						<div class="form-group">
							<textarea name="address" class="form-control" id="address"><?php echo ($this->input->post('address') ? $this->input->post('address') : $user['address']); ?></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<label for="avatar" class="control-label">Avatar</label>
						<div class="form-group">
							<textarea name="avatar" class="form-control" id="avatar"><?php echo ($this->input->post('avatar') ? $this->input->post('avatar') : $user['avatar']); ?></textarea>
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
            	<button type="submit" class="btn btn-success">
					<i class="fa fa-check"></i> Save
				</button>
	        </div>				
			<?php echo form_close(); ?>
		</div>
    </div>
</div>