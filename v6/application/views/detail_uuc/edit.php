<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Detail Uuc Edit</h3>
            </div>
			<?php echo form_open('detail_uuc/edit/'.$detail_uuc['']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="account" class="control-label"><span class="text-danger">*</span>Account</label>
						<div class="form-group">
							<input type="text" name="account" value="<?php echo ($this->input->post('account') ? $this->input->post('account') : $detail_uuc['account']); ?>" class="form-control" id="account" />
							<span class="text-danger"><?php echo form_error('account');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="userClassID" class="control-label"><span class="text-danger">*</span>UserClassID</label>
						<div class="form-group">
							<input type="text" name="userClassID" value="<?php echo ($this->input->post('userClassID') ? $this->input->post('userClassID') : $detail_uuc['userClassID']); ?>" class="form-control" id="userClassID" />
							<span class="text-danger"><?php echo form_error('userClassID');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="status" class="control-label"><span class="text-danger">*</span>Status</label>
						<div class="form-group">
							<input type="text" name="status" value="<?php echo ($this->input->post('status') ? $this->input->post('status') : $detail_uuc['status']); ?>" class="form-control" id="status" />
							<span class="text-danger"><?php echo form_error('status');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="certificate" class="control-label"><span class="text-danger">*</span>Certificate</label>
						<div class="form-group">
							<input type="text" name="certificate" value="<?php echo ($this->input->post('certificate') ? $this->input->post('certificate') : $detail_uuc['certificate']); ?>" class="form-control" id="certificate" />
							<span class="text-danger"><?php echo form_error('certificate');?></span>
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