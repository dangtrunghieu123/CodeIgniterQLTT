<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Detail Uc Edit</h3>
            </div>
			<?php echo form_open('detail_uc/edit/'.$detail_uc['']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="courseID" class="control-label"><span class="text-danger">*</span>CourseID</label>
						<div class="form-group">
							<input type="text" name="courseID" value="<?php echo ($this->input->post('courseID') ? $this->input->post('courseID') : $detail_uc['courseID']); ?>" class="form-control" id="courseID" />
							<span class="text-danger"><?php echo form_error('courseID');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="account" class="control-label"><span class="text-danger">*</span>Account</label>
						<div class="form-group">
							<input type="text" name="account" value="<?php echo ($this->input->post('account') ? $this->input->post('account') : $detail_uc['account']); ?>" class="form-control" id="account" />
							<span class="text-danger"><?php echo form_error('account');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="status" class="control-label"><span class="text-danger">*</span>Status</label>
						<div class="form-group">
							<input type="text" name="status" value="<?php echo ($this->input->post('status') ? $this->input->post('status') : $detail_uc['status']); ?>" class="form-control" id="status" />
							<span class="text-danger"><?php echo form_error('status');?></span>
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