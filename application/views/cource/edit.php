
<section class="content">
	<div class="container-fluid">
		<div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="card">
					<div class="header">
						<a href="<?=base_url()?>cource/index" class="btn btn-primary btn-raised pull-right waves-effect m-t--10"  data-toggle="tooltip" data-original-title="Quay lại">
							<i class="material-icons">keyboard_backspace</i> 
						</a>
						<h2>SỬA KHÓA HỌC</h2>
					</div>
					<div class="body">
					<form id="form_advanced_validation" method="POST">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<div class="form-group">
										<label>Tên khóa học</label>
                                        <div class="form-line">
											<input type="text" class="form-control" placeholder="Nhập tên khóa học" name="nameCourse" value="<?=$cource['nameCourse']?>" required>
                                        </div>
                                    </div>
								</div>

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<div class="form-group">
										<label>Hình ảnh</label>
                                        <div class="form-line">
											<input type="text" class="form-control" placeholder="url" name="image" value="<?=$cource['image']?>" required>
                                        </div>
                                    </div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
									<div class="form-group">
										<label>Gía</label>
                                        <div class="form-line">
											<input type="number" class="form-control" placeholder="giá khóa học" value="<?=$cource['price']?>" name="price" required>
                                        </div>
                                    </div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
									<div class="form-group">
										<label>Người tạo</label>
                                        <select class="form-control show-tick" data-live-search="true" name="author" id="" 	 required>
											<option value="<?php echo $cource['author']; ?>" selected disabled style="display:none;"><?php echo $cource['author']; ?></option> 
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
										<label>Mô tả</label>
                                        <div class="form-line">
											<textarea name="description" class="form-control" id="ckeditor"><?=$cource['description']?></textarea>
                                        </div>
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


