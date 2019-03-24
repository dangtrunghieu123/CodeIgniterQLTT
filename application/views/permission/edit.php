<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Permission Edit</h3>
            </div>
			<?php echo form_open('permission/edit/'.$permission['permissionID']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="namePermission" class="control-label"><span class="text-danger">*</span>NamePermission</label>
						<div class="form-group">
							<input type="text" name="namePermission" value="<?php echo ($this->input->post('namePermission') ? $this->input->post('namePermission') : $permission['namePermission']); ?>" class="form-control" id="namePermission" />
							<span class="text-danger"><?php echo form_error('namePermission');?></span>
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