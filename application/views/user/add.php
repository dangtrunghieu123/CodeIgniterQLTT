
<section class="content">
	<div class="container-fluid">

		<div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="card">
					<div class="header">
						<a href="<?=base_url()?>user/index" class="btn btn-primary btn-raised pull-right waves-effect m-t--10"  data-toggle="tooltip" data-original-title="Quay lại">
							<i class="material-icons">keyboard_backspace</i> 
						</a>
						<h2>THÊM NGƯỜI DÙNG</h2>
					</div>
					<div class="body">
					<form id="form_advanced_validation" method="POST">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
									<div class="form-group">
										<label>Tài khoản</label>
                                        <div class="form-line">
											<input type="text" class="form-control" placeholder="Nhập tài khoản" name="account" required>
                                        </div>
                                    </div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
									<div class="form-group">
										<label>Mật khẩu </label>
                                        <div class="form-line">
											<input type="password" class="form-control" placeholder="Nhập password" name="pass" required>
                                        </div>
                                    </div>
								</div>
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<div class="form-group">
										<label>Họ tên</label>
                                        <div class="form-line">
											<input type="text" class="form-control" placeholder="Nhập họ tên" name="name" required>
                                        </div>
                                    </div>
								</div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<div class="form-group">
										<label>Hình ảnh</label>
                                        <div class="form-line">
											<input type="text" class="form-control" placeholder="url" name="avatar" required>
                                        </div>
                                    </div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
									<div class="form-group">
										<label>Email</label>
                                        <div class="form-line">
											<input type="email" class="form-control" placeholder="Nhập email" name="email" required>
                                        </div>
                                    </div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
									<div class="form-group">
										<label>Mã người dùng</label>
                                        <select class="form-control show-tick" data-live-search="true" name="permissionID" id="" required>
                                              
											<?php foreach($permission as $value){?>
											<option value="<?php echo $value['permissionID']; ?>">
												<?php echo $value['namePermission']; ?>
											</option>
											<?php }?>
                                        </select>
                                    </div>
								</div>

								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<div class="form-group">
										<label>Địa chỉ</label>
                                        <div class="form-line">
											<input type="text" class="form-control" placeholder="Nhập địa chỉ" name="address" required>
                                        </div>
                                    </div>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
									<div class="form-group">
										<label>SĐT</label>
                                        <div class="form-line">
											<input type="number" class="form-control" placeholder="Số điện thoại" name="phone" required>
                                        </div>
                                    </div>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
									<div class="form-group">
										<label>Ngày sinh</label>
                                        <div class="form-line">
											<input type="date" class="form-control"  name="birthday" required>
                                        </div>
                                    </div>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 ">
                                    <div class="form-group">
                                        <p style=" margin-top:10px;color:black; font-size:bold">Giới tính</p>

                                        <input checked value='Nam' type="radio" name="gender" id="male" class="with-gap ">
                                        <label for="male">Nam</label>

                                        <input value='Nữ' type="radio" name="gender" id="female" class="with-gap">
                                        <label for="female" class="m-l-20">Nữ</label>
                                    </div>
                                </div>
								
							
						
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<div class="form-group">
										<label>Giới thiệu</label>
                                        <div class="form-line">
											<textarea name="introduce" placeholder="Giới thiệu bản thân (nếu có)" class="form-control" id="ckeditor"></textarea>
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


