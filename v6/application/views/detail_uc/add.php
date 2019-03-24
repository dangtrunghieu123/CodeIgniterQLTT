<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Detail Uc Add</h3>
            </div>
            <?php echo form_open('detail_uc/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="userClassID" class="control-label"><span class="text-danger">*</span>UserClassID</label>
						<div class="form-group">
							<input type="text" name="userClassID" value="<?php echo $this->input->post('userClassID'); ?>" class="form-control" id="userClassID" />
							<span class="text-danger"><?php echo form_error('userClassID');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="courseID" class="control-label"><span class="text-danger">*</span>CourseID</label>
						<div class="form-group">
							<input type="text" name="courseID" value="<?php echo $this->input->post('courseID'); ?>" class="form-control" id="courseID" />
							<span class="text-danger"><?php echo form_error('courseID');?></span>
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