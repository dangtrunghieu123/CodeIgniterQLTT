<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
    		
  .c-card:hover {
	box-shadow: 0 5px 22px 0 rgba(0,0,0,.25);
	box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
  }

   .c-card img{
       height:200px;
       width:100%;
   }
  
  .courses-info{
	border-top: 1px solid #9f9e9e;
	padding-top: 18px;
	
  }
  .courses-info li{
	display: inline-block;
    position: relative;
    left:-36px;
  }
  .courses-info li:last-child {
    float: right;
}
.class_time {
    color: #9f9e9e;
}
</style>


<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">playlist_add_check</i>
                        </div>
                        <div class="content">
                            <div class="text">NEW TASKS</div>
                            <div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20">125</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">help</i>
                        </div>
                        <div class="content">
                            <div class="text">NEW TICKETS</div>
                            <div class="number count-to" data-from="0" data-to="257" data-speed="1000" data-fresh-interval="20">257</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-green hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">forum</i>
                        </div>
                        <div class="content">
                            <div class="text">NEW COMMENTS</div>
                            <div class="number count-to" data-from="0" data-to="243" data-speed="1000" data-fresh-interval="20">243</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-orange hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">person_add</i>
                        </div>
                        <div class="content">
                            <div class="text">NEW VISITORS</div>
                            <div class="number count-to" data-from="0" data-to="1225" data-speed="1000" data-fresh-interval="20">1225</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Tabs With Custom Animations -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                XEM THÔNG CÁC THÔNG TIN
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                                    
                            <div class="clearfix">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs tab-nav-right" role="tablist" style="margin-bottom: 20px;">
                                        <li role="presentation" class="active"><a href="#home_animation_2" data-toggle="tab"><i class="material-icons">view_module</i>KHÓA HỌC CỦA TÔI</a></li>
                                        <li role="presentation"><a href="#profile_animation_2" data-toggle="tab"><i class="material-icons">assignment_ind</i>DANH SÁCH GIẢNG VIÊN</a></li>
                                        <li role="presentation"><a href="#messages_animation_2" data-toggle="tab"><i class="material-icons">account_box</i>DANH SÁCH HỌC VIÊN</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane animated fadeInRight active"  id="home_animation_2">
                                            
                                            <?php foreach($courses as $value){?>
                                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                    <div class="card c-card">
                                                        <img src="<?= $value['image'] ?>" width="100%">
                                                        <div class="body">
                                                            <div class="class_time">Classes <i class="fa fa-clock-o"></i> 10 am - 11 am</div>
                                                            <h3> <a href=""><?=	$value['nameCourse'] ?></a> </h3>
                                                            <p>Người tạo : <?=	$value['author'] ?></p>
                                                            <ul class="courses-info">
                                                                <li class="courses-info__price"><strong class="color">$<?=$value['price']?> </strong></li>
                                                                <li>
                                                                    <span><i class="fa fa-users"></i> 123</span>
                                                                    <span class="heart_icon"> <i class="fa fa-heart-o"></i></span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>	
                                            <?php } ?>
                                            
                                        </div>
                                        <div role="tabpanel" class="tab-pane animated fadeInRight" id="profile_animation_2">
                                            <!-- <?php foreach($teacher as $val){?>
                                                <div class="item">	
                                                    <div class="ih-item circle effect5">
                                                        <a href="#">
                                                            <div class="img"><img src="<?=$val['avatar'] ?>" width="100%"></div>
                                                            <div class="info">
                                                                <div class="info-back">
                                                                    <h3>Profile</h3>		           
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="team-bottom">
                                                        <p><?=$val['name'] ?></p>
                                                        <p><?=$val['birthday'] ?></p>
                                                        <ul>
                                                            <li><a href="#" class="fa"> </a></li>
                                                            <li><a href="#" class="tw"> </a></li>
                                                            <li><a href="#" class="g"> </a></li>
                                                        </ul>
                                                    </div>	
                                                </div>
                                            <?php } ?> -->
                                            <div class="table-responsive">
                                            <table class="table table-bordered table-striped table-hover dataTable js-basic-example">
                                                <thead>
                                                    <tr>
                                                        
                                                        <th>Họ Tên</th>
                                                        <th>Email</th>
                                                        <th>SĐT</th>
                                                        <th>Ngày sinh</th>
                                                        <th>Địa chỉ</th>
                                                        <th>Thao tác</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach($teacher as $t){ ?>
                                                        <tr>
                                                            
                                                            <td><?php echo $t['name']; ?></td>
                                                            <td><?php echo $t['email']; ?></td>
                                                            <td><?php echo $t['phone']; ?></td>
                                                            <td><?php echo $t['birthday']; ?></td>
                                                            <td><?php echo $t['address']; ?></td>
                                                            <td>
                                                                <a href="#" data-toggle="tooltip" data-original-title="Chi tiết" class="btn btn-success btn-xs"><i class='material-icons'>search</i></a> 
                                                                
                                                                <!-- <a href="<?php echo site_url('cource/edit/'.$c['courseID']); ?>" data-toggle="tooltip" data-original-title="Sửa khóa học" class="btn btn-warning btn-xs"><i class='material-icons'>edit</i></a> 
                                                                <a onclick="onDelete('<?=$c['courseID']?>','<?=$c['nameCourse']?>')" class="btn btn-danger btn-xs"
                                                                data-toggle="tooltip" data-original-title="Xóa">
                                                                    <i class="material-icons">delete</i>
                                                                </a> -->
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
                        </div>
                    </div>
            </div>
            <!-- #END# Tabs With Custom Animations -->
        </div>
    </section>
    


