<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Course Add</h3>
            </div>
            <?php echo form_open('course/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="nameCourse" class="control-label"><span class="text-danger">*</span>NameCourse</label>
						<div class="form-group">
							<input type="text" name="nameCourse" value="<?php echo $this->input->post('nameCourse'); ?>" class="form-control" id="nameCourse" />
							<span class="text-danger"><?php echo form_error('nameCourse');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="amountReg" class="control-label">AmountReg</label>
						<div class="form-group">
							<input type="text" name="amountReg" value="<?php echo $this->input->post('amountReg'); ?>" class="form-control" id="amountReg" />
							<span class="text-danger"><?php echo form_error('amountReg');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="price" class="control-label"><span class="text-danger">*</span>Price</label>
						<div class="form-group">
							<input type="text" name="price" value="<?php echo $this->input->post('price'); ?>" class="form-control" id="price" />
							<span class="text-danger"><?php echo form_error('price');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="userID" class="control-label"><span class="text-danger">*</span>UserID</label>
						<div class="form-group">
							<input type="text" name="userID" value="<?php echo $this->input->post('userID'); ?>" class="form-control" id="userID" />
							<span class="text-danger"><?php echo form_error('userID');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="image" class="control-label"><span class="text-danger">*</span>Image</label>
						<div class="form-group">
							<textarea name="image" class="form-control" id="image"><?php echo $this->input->post('image'); ?></textarea>
							<span class="text-danger"><?php echo form_error('image');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="desription" class="control-label"><span class="text-danger">*</span>Desription</label>
						<div class="form-group">
							<textarea name="desription" class="form-control" id="desription"><?php echo $this->input->post('desription'); ?></textarea>
							<span class="text-danger"><?php echo form_error('desription');?></span>
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