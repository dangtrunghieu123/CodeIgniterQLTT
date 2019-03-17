<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Type User Add</h3>
            </div>
            <?php echo form_open('type_user/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="nameTypeUser" class="control-label"><span class="text-danger">*</span>NameTypeUser</label>
						<div class="form-group">
							<input type="text" name="nameTypeUser" value="<?php echo $this->input->post('nameTypeUser'); ?>" class="form-control" id="nameTypeUser" />
							<span class="text-danger"><?php echo form_error('nameTypeUser');?></span>
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