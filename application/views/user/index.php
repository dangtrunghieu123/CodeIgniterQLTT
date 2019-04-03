<section class="content">
	<div class="container-fluid">

		<div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="card">
					<div class="header">
						<a href="<?=base_url()?>user/add" class="btn btn-primary btn-raised pull-right waves-effect m-t--10"  data-toggle="tooltip" data-original-title="Thêm khóa học">
							<i class="material-icons">add</i> 
						</a>
						<h2>QUẢN LÝ NGƯỜI DÙNG</h2>
					</div>
					<div class="body">
					<div class="clearfix">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs tab-nav-right" role="tablist" style="margin-bottom: 20px;">
                                        <li role="presentation" class="active"><a href="#home_animation_2" data-toggle="tab">DANH SÁCH ADMIN</a></li>
                                        <li role="presentation"><a href="#profile_animation_2" data-toggle="tab">DANH SÁCH GIẢNG VIÊN</a></li>
                                        <li role="presentation"><a href="#messages_animation_2" data-toggle="tab">DANH SÁCH HỌC VIÊN</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane animated fadeInRight active"  id="home_animation_2">
                                            
										<div class="table-responsive">
												<table class="table table-bordered table-striped table-hover dataTable js-basic-example">
													<thead>
														<tr>
															<th>Tài khoản</th>
															<th>Họ Tên</th>
															<th>Email</th>
															<th>SĐT</th>
															<th>Loại người dùng</th>
															<th>Thao tác</th>
														</tr>
													</thead>
													<tbody>
														<?php foreach($AD as $u){ ?>
															<tr>
																<td><?php echo $u['account']; ?></td>
																<td><?php echo $u['name']; ?></td>
																<td><?php echo $u['email']; ?></td>
																<td><?php echo $u['phone']; ?></td>
																<td><?php echo $u['namePermission']; ?></td>
																<td>
																	<a href="<?php echo site_url('user/edit/'.$u['account']); ?>" data-toggle="tooltip" data-original-title="Sửa người dùng" class="btn btn-warning btn-xs"><i class='material-icons'>edit</i></a> 
																	<a href="<?php echo site_url('user/remove/'.$u['account']); ?>" data-toggle="tooltip" data-original-title="Xóa người dùng" class="btn btn-danger btn-xs"><i class='material-icons'>delete</i></a>
																</td>
															</tr>
														<?php } ?>
													</tbody>
												</table>
											</div>

                                            
                                        </div>
                                        <div role="tabpanel" class="tab-pane animated fadeInRight" id="profile_animation_2">
                                           
                                            <div class="table-responsive">
												<table class="table table-bordered table-striped table-hover dataTable js-basic-example">
													<thead>
														<tr>
															<th>Tài khoản</th>
															<th>Họ Tên</th>
															<th>Email</th>
															<th>SĐT</th>
															<th>Loại người dùng</th>
															<th>Thao tác</th>
														</tr>
													</thead>
													<tbody>
														<?php foreach($T as $u){ ?>
															<tr>
																<td><?php echo $u['account']; ?></td>
																<td><?php echo $u['name']; ?></td>
																<td><?php echo $u['email']; ?></td>
																<td><?php echo $u['phone']; ?></td>
																<td><?php echo $u['namePermission']; ?></td>
																<td>
																	<a href="<?php echo site_url('user/edit/'.$u['account']); ?>" data-toggle="tooltip" data-original-title="Sửa người dùng" class="btn btn-warning btn-xs"><i class='material-icons'>edit</i></a> 
																	<a href="<?php echo site_url('user/remove/'.$u['account']); ?>" data-toggle="tooltip" data-original-title="Xóa người dùng" class="btn btn-danger btn-xs"><i class='material-icons'>delete</i></a>
																</td>
															</tr>
														<?php } ?>
													</tbody>
												</table>
											</div>


                                        </div>
                                        <div role="tabpanel" class="tab-pane animated fadeInRight" id="messages_animation_2">
											<div class="table-responsive">
												<table class="table table-bordered table-striped table-hover dataTable js-basic-example">
													<thead>
														<tr>
															<th>Tài khoản</th>
															<th>Họ Tên</th>
															<th>Email</th>
															<th>SĐT</th>
															<th>Loại người dùng</th>
															<th>Thao tác</th>
														</tr>
													</thead>
													<tbody>
														<?php foreach($ST as $u){ ?>
															<tr>
																<td><?php echo $u['account']; ?></td>
																<td><?php echo $u['name']; ?></td>
																<td><?php echo $u['email']; ?></td>
																<td><?php echo $u['phone']; ?></td>
																<td><?php echo $u['namePermission']; ?></td>
																<td>
																	<a href="<?php echo site_url('user/edit/'.$u['account']); ?>" data-toggle="tooltip" data-original-title="Sửa người dùng" class="btn btn-warning btn-xs"><i class='material-icons'>edit</i></a> 
																	<a href="<?php echo site_url('user/remove/'.$u['account']); ?>" data-toggle="tooltip" data-original-title="Xóa người dùng" class="btn btn-danger btn-xs"><i class='material-icons'>delete</i></a>
																</td>
															</tr>
														<?php } ?>
													</tbody>
												</table>
											</div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane animated fadeInRight" id="settings_animation_2">
                                            <b>Settings Content</b>
                                            <p>
                                                Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
                                                Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent
                                                aliquid pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere
                                                gubergren sadipscing mel.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
						<!-- <div class="table-responsive">
							<table class="table table-bordered table-striped table-hover dataTable js-basic-example">
								<thead>
								<tr>
									<th>Tài khoản</th>
									<th>Họ Tên</th>
									<th>Email</th>
									<th>SĐT</th>
									<th>Loại người dùng</th>
									<th>Thao tác</th>
								</tr>
								</thead>
								<tbody>
								<?php foreach($user as $u){ ?>
									<tr>
										<td><?php echo $u['account']; ?></td>
										<td><?php echo $u['name']; ?></td>
										<td><?php echo $u['email']; ?></td>
										<td><?php echo $u['phone']; ?></td>
										<td><?php echo $u['namePermission']; ?></td>
										<td>
											<a href="<?php echo site_url('user/edit/'.$u['account']); ?>" data-toggle="tooltip" data-original-title="Sửa người dùng" class="btn btn-warning btn-xs"><i class='material-icons'>edit</i></a> 
											<a href="<?php echo site_url('user/remove/'.$u['account']); ?>" data-toggle="tooltip" data-original-title="Xóa người dùng" class="btn btn-danger btn-xs"><i class='material-icons'>delete</i></a>
										</td>
									</tr>
									<?php } ?>
								</tbody>
							</table>
						</div> -->
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


