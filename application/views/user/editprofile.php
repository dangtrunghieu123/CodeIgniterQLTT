
<section class="content">
	<div class="container-fluid">

		<div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="card">
					<div class="header">
						
						<h2>SỬA TTCN</h2>
					</div>
					<div class="body">
					<form id="form_advanced_validation" method="POST">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
									<div class="form-group">
										<label>Tài khoản</label>
                                        <div class="form-line">
											<input type="text" class="form-control" value="<?=$user['account'] ?>" placeholder="Nhập tài khoản" name="account" required>
                                        </div>
                                    </div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
									<div class="form-group">
										<label>Mật khẩu </label>
                                        <div class="form-line">
											<input type="password" class="form-control"  placeholder="Nhập password mới nếu muốn thay đổi" name="pass">
                                        </div>
                                    </div>
								</div>
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<div class="form-group">
										<label>Họ tên</label>
                                        <div class="form-line">
											<input type="text" class="form-control" placeholder="Nhập họ tên" value="<?=$user['name'] ?>" name="name" required>
                                        </div>
                                    </div>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
									<div class="form-group">
										<label>Email</label>
                                        <div class="form-line">
											<input type="email" class="form-control" placeholder="Nhập email" value="<?=$user['email'] ?>" name="email" required>
                                        </div>
                                    </div>
								</div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
									<div class="form-group">
										<label>SĐT</label>
                                        <div class="form-line">
											<input type="number" class="form-control" value="<?=$user['phone'] ?>"  placeholder="Số điện thoại" name="phone" required>
                                        </div>
                                    </div>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
									<div class="form-group">
										<label>Ngày sinh</label>
                                        <div class="form-line">
											<input type="date" class="form-control" value="<?=$user['birthday'] ?>"  name="birthday" required>
                                        </div>
                                    </div>
								</div>

								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<div class="form-group">
										<label>Địa chỉ</label>
                                        <div class="form-line">
											<input type="text" class="form-control" value="<?=$user['address'] ?>" placeholder="Nhập địa chỉ" name="address" required>
                                        </div>
                                    </div>
								</div>
								
								
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<div class="form-group">
										<label>Giới thiệu</label>
                                        <div class="form-line">
											<textarea name="introduce"  placeholder="Giới thiệu bản thân (nếu có)" class="form-control" id="ckeditor"><?=$user['introduce'] ?></textarea>
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


