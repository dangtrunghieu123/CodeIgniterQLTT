<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Detail Cl Edit</h3>
            </div>
			<?php echo form_open('detail_cl/edit/'.$detail_cl['']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="courseID" class="control-label"><span class="text-danger">*</span>CourseID</label>
						<div class="form-group">
							<input type="text" name="courseID" value="<?php echo ($this->input->post('courseID') ? $this->input->post('courseID') : $detail_cl['courseID']); ?>" class="form-control" id="courseID" />
							<span class="text-danger"><?php echo form_error('courseID');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="lessonID" class="control-label"><span class="text-danger">*</span>LessonID</label>
						<div class="form-group">
							<input type="text" name="lessonID" value="<?php echo ($this->input->post('lessonID') ? $this->input->post('lessonID') : $detail_cl['lessonID']); ?>" class="form-control" id="lessonID" />
							<span class="text-danger"><?php echo form_error('lessonID');?></span>
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