<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Lesson Edit</h3>
            </div>
			<?php echo form_open('lesson/edit/'.$lesson['lessonID']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="nameLesson" class="control-label"><span class="text-danger">*</span>NameLesson</label>
						<div class="form-group">
							<input type="text" name="nameLesson" value="<?php echo ($this->input->post('nameLesson') ? $this->input->post('nameLesson') : $lesson['nameLesson']); ?>" class="form-control" id="nameLesson" />
							<span class="text-danger"><?php echo form_error('nameLesson');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="view" class="control-label">View</label>
						<div class="form-group">
							<input type="text" name="view" value="<?php echo ($this->input->post('view') ? $this->input->post('view') : $lesson['view']); ?>" class="form-control" id="view" />
							<span class="text-danger"><?php echo form_error('view');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="account" class="control-label"><span class="text-danger">*</span>Account</label>
						<div class="form-group">
							<input type="text" name="account" value="<?php echo ($this->input->post('account') ? $this->input->post('account') : $lesson['account']); ?>" class="form-control" id="account" />
							<span class="text-danger"><?php echo form_error('account');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="image" class="control-label"><span class="text-danger">*</span>Image</label>
						<div class="form-group">
							<textarea name="image" class="form-control" id="image"><?php echo ($this->input->post('image') ? $this->input->post('image') : $lesson['image']); ?></textarea>
							<span class="text-danger"><?php echo form_error('image');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="content" class="control-label"><span class="text-danger">*</span>Content</label>
						<div class="form-group">
							<textarea name="content" class="form-control" id="content"><?php echo ($this->input->post('content') ? $this->input->post('content') : $lesson['content']); ?></textarea>
							<span class="text-danger"><?php echo form_error('content');?></span>
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