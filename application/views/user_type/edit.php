<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">User Type Edit</h3>
            </div>
			<?php echo form_open('user_type/edit/'.$user_type['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="nameType" class="control-label"><span class="text-danger">*</span>NameType</label>
						<div class="form-group">
							<input type="text" name="nameType" value="<?php echo ($this->input->post('nameType') ? $this->input->post('nameType') : $user_type['nameType']); ?>" class="form-control" id="nameType" />
							<span class="text-danger"><?php echo form_error('nameType');?></span>
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