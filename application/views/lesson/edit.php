

<section class="content">
	<div class="container-fluid">

		<div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="card">
					<div class="header">
						<a href="<?=base_url()?>lesson/index" class="btn btn-primary btn-raised pull-right waves-effect m-t--10"  data-toggle="tooltip" data-original-title="Quay lại">
							<i class="material-icons">keyboard_backspace</i> 
						</a>
						<h2>SỬA BÀI HỌC</h2>
					</div>
					<div class="body">
					<form id="form_advanced_validation" method="POST">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<div class="form-group">
										<label>Tên bài học</label>
                                        <div class="form-line">
											<input type="text" value="<?=$lesson['nameLesson'] ?>" class="form-control" placeholder="Nhập tên bài học" name="nameLesson" required>
                                        </div>
                                    </div>
								</div>
								
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<div class="form-group">
										<label>Người tạo</label>
                                        <select class="form-control show-tick" data-live-search="true" name="author" id="" required>
										<option value="<?=$lesson['author'] ?>" selected disabled style="display:none;"><?=$lesson['author'] ?></option>
											<?php foreach($author as $value){?>
											<option value="<?php echo $value['account']; ?>">
												<?php echo $value['account']; ?>
											</option>
											<?php }?>
                                        </select>
                                    </div>
								</div>

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<div class="form-group">
										<label>Nội dung</label>
										<textarea name="content" placeholder="Giới thiệu bản thân (nếu có)" class="form-control" id="ckeditor"><?=$lesson['content'] ?></textarea>
                                     
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



<script type="text/javascript">
	$(function() {				    				    
		if(CKEDITOR.instances['ckeditor']) {						
			CKEDITOR.remove(CKEDITOR.instances['ckeditor']);
		}
	    CKEDITOR.config.height = 300;
		CKEDITOR.replace('content', {
			allowedContent: 'iframe[*]'
		});
	})
</script>


