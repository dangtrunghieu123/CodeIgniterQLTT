<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">User Clas Add</h3>
            </div>
            <?php echo form_open('user_clas/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="studentID" class="control-label"><span class="text-danger">*</span>StudentID</label>
						<div class="form-group">
							<input type="text" name="studentID" value="<?php echo $this->input->post('studentID'); ?>" class="form-control" id="studentID" />
							<span class="text-danger"><?php echo form_error('studentID');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="classID" class="control-label"><span class="text-danger">*</span>ClassID</label>
						<div class="form-group">
							<input type="text" name="classID" value="<?php echo $this->input->post('classID'); ?>" class="form-control" id="classID" />
							<span class="text-danger"><?php echo form_error('classID');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="status" class="control-label"><span class="text-danger">*</span>Status</label>
						<div class="form-group">
							<input type="text" name="status" value="<?php echo $this->input->post('status'); ?>" class="form-control" id="status" />
							<span class="text-danger"><?php echo form_error('status');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="result" class="control-label"><span class="text-danger">*</span>Result</label>
						<div class="form-group">
							<input type="text" name="result" value="<?php echo $this->input->post('result'); ?>" class="form-control" id="result" />
							<span class="text-danger"><?php echo form_error('result');?></span>
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