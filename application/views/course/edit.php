<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Course Edit</h3>
            </div>
			<?php echo form_open('course/edit/'.$course['courseID']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="nameCourse" class="control-label"><span class="text-danger">*</span>NameCourse</label>
						<div class="form-group">
							<input type="text" name="nameCourse" value="<?php echo ($this->input->post('nameCourse') ? $this->input->post('nameCourse') : $course['nameCourse']); ?>" class="form-control" id="nameCourse" />
							<span class="text-danger"><?php echo form_error('nameCourse');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="amountReg" class="control-label">AmountReg</label>
						<div class="form-group">
							<input type="text" name="amountReg" value="<?php echo ($this->input->post('amountReg') ? $this->input->post('amountReg') : $course['amountReg']); ?>" class="form-control" id="amountReg" />
							<span class="text-danger"><?php echo form_error('amountReg');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="image" class="control-label">Image</label>
						<div class="form-group">
							<textarea name="image" class="form-control" id="image"><?php echo ($this->input->post('image') ? $this->input->post('image') : $course['image']); ?></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<label for="description" class="control-label">Description</label>
						<div class="form-group">
							<textarea name="description" class="form-control" id="description"><?php echo ($this->input->post('description') ? $this->input->post('description') : $course['description']); ?></textarea>
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