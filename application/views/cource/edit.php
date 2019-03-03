<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Cource Edit</h3>
            </div>
			<?php echo form_open('cource/edit/'.$cource['course']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="nameCourse" class="control-label"><span class="text-danger">*</span>NameCourse</label>
						<div class="form-group">
							<input type="text" name="nameCourse" value="<?php echo ($this->input->post('nameCourse') ? $this->input->post('nameCourse') : $cource['nameCourse']); ?>" class="form-control" id="nameCourse" />
							<span class="text-danger"><?php echo form_error('nameCourse');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="view" class="control-label">View</label>
						<div class="form-group">
							<input type="text" name="view" value="<?php echo ($this->input->post('view') ? $this->input->post('view') : $cource['view']); ?>" class="form-control" id="view" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="author" class="control-label"><span class="text-danger">*</span>Author</label>
						<div class="form-group">
							<input type="text" name="author" value="<?php echo ($this->input->post('author') ? $this->input->post('author') : $cource['author']); ?>" class="form-control" id="author" />
							<span class="text-danger"><?php echo form_error('author');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="description" class="control-label">Description</label>
						<div class="form-group">
							<textarea name="description" class="form-control" id="description"><?php echo ($this->input->post('description') ? $this->input->post('description') : $cource['description']); ?></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<label for="images" class="control-label"><span class="text-danger">*</span>Images</label>
						<div class="form-group">
							<textarea name="images" class="form-control" id="images"><?php echo ($this->input->post('images') ? $this->input->post('images') : $cource['images']); ?></textarea>
							<span class="text-danger"><?php echo form_error('images');?></span>
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