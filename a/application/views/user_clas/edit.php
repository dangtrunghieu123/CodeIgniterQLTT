<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">User Clas Edit</h3>
            </div>
			<?php echo form_open('user_clas/edit/'.$user_clas['userClassID']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="time" class="control-label"><span class="text-danger">*</span>Time</label>
						<div class="form-group">
							<input type="text" name="time" value="<?php echo ($this->input->post('time') ? $this->input->post('time') : $user_clas['time']); ?>" class="form-control" id="time" />
							<span class="text-danger"><?php echo form_error('time');?></span>
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