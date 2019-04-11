
<section class="content">
	<div class="container-fluid">

		<div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="card">
					<div class="header">
						<a href="<?=base_url()?>clas/index" class="btn btn-primary btn-raised pull-right waves-effect m-t--10"  data-toggle="tooltip" data-original-title="Thêm khóa học">
							<i class="material-icons">keyboard_backspace</i> 
						</a>
						<h2>THÊM LỚP HỌC</h2>
					</div>
					<div class="body">
						<form id="form_advanced_validation" method="POST">
                            <div class="row">
                                
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
									<div class="form-group">
										<label>Khóa học</label>
                                        <select class="form-control show-tick" data-live-search="true" name="courseID" id="" required>
											<option value="" selected disabled style="display:none;">Chọn khóa học</option>  
											<?php foreach($_course as $value){?>
											<option value="<?php echo $value['courseID']; ?>">
												<?php echo $value['nameCourse']; ?>
											</option>
											<?php }?>
                                        </select>
                                    </div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
									<div class="form-group">
										<label>Giảng viên</label>
                                        <select class="form-control show-tick" data-live-search="true" name="teacherID" id="" required>
											<option value="" selected disabled style="display:none;">Chọn giảng viên</option>  
											<?php foreach($_teacher as $value){?>
											<option value="<?php echo $value['account']; ?>">
												<?php echo $value['account']; ?>
											</option>
											<?php }?>
                                        </select>
                                    </div>
								</div>

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<div class="form-group">
										<label>Thời gian học</label>
										<textarea name="times" placeholder="Giới thiệu bản thân (nếu có)" class="form-control" id="ckeditor" required></textarea>
                                     
                                    </div>
								</div>
                            </div>

                            <button class="btn btn-primary waves-effect btn-block" type="submit">LƯU</button>
                        </form>		
					</div>
				</div>
			</div>
		</div>

	</div>
</section>



<!-- <script type="text/javascript">
	$(function() {				    				    
		if(CKEDITOR.instances['ckeditor']) {						
			CKEDITOR.remove(CKEDITOR.instances['ckeditor']);
		}
	    CKEDITOR.config.height = 300;
		CKEDITOR.replace('content', {
			allowedContent: 'iframe[*]'
		});
	})
</script> -->

