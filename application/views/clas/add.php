<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Clas Add</h3>
            </div>
            <?php echo form_open('clas/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="courseID" class="control-label"><span class="text-danger">*</span>CourseID</label>
						<div class="form-group">
							<input type="text" name="courseID" value="<?php echo $this->input->post('courseID'); ?>" class="form-control" id="courseID" />
							<span class="text-danger"><?php echo form_error('courseID');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="teacherID" class="control-label"><span class="text-danger">*</span>TeacherID</label>
						<div class="form-group">
							<input type="text" name="teacherID" value="<?php echo $this->input->post('teacherID'); ?>" class="form-control" id="teacherID" />
							<span class="text-danger"><?php echo form_error('teacherID');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="times" class="control-label"><span class="text-danger">*</span>Times</label>
						<div class="form-group">
							<input type="text" name="times" value="<?php echo $this->input->post('times'); ?>" class="form-control" id="times" />
							<span class="text-danger"><?php echo form_error('times');?></span>
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