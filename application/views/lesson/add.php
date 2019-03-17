<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Lesson Add</h3>
            </div>
            <?php echo form_open('lesson/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="nameLesson" class="control-label"><span class="text-danger">*</span>NameLesson</label>
						<div class="form-group">
							<input type="text" name="nameLesson" value="<?php echo $this->input->post('nameLesson'); ?>" class="form-control" id="nameLesson" />
							<span class="text-danger"><?php echo form_error('nameLesson');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="view" class="control-label">View</label>
						<div class="form-group">
							<input type="text" name="view" value="<?php echo $this->input->post('view'); ?>" class="form-control" id="view" />
							<span class="text-danger"><?php echo form_error('view');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="account" class="control-label"><span class="text-danger">*</span>Account</label>
						<div class="form-group">
							<input type="text" name="account" value="<?php echo $this->input->post('account'); ?>" class="form-control" id="account" />
							<span class="text-danger"><?php echo form_error('account');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="image" class="control-label">Image</label>
						<div class="form-group">
							<textarea name="image" class="form-control" id="image"><?php echo $this->input->post('image'); ?></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<label for="description" class="control-label">Description</label>
						<div class="form-group">
							<textarea name="description" class="form-control" id="description"><?php echo $this->input->post('description'); ?></textarea>
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