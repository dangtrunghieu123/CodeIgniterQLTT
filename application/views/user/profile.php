
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
   
    <!-- <link rel="icon" href="<?=base_url()?>public/assets/favicon.ico" type="image/x-icon"> -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="<?=base_url()?>public/assets/themes/admin/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="<?=base_url()?>public/assets/themes/admin/plugins/node-waves/waves.css" rel="stylesheet" />
    <link href="<?=base_url()?>public/assets/themes/admin/plugins/animate-css/animate.css" rel="stylesheet" />
    <link href="<?=base_url()?>public/assets/themes/admin/css/style.css" rel="stylesheet">
    <link href="<?=base_url()?>public/assets/themes/admin/css/themes/all-themes.css" rel="stylesheet" />
    <link href="<?=base_url()?>public/assets/themes/admin/js/sweetalert.css" rel="stylesheet" />
    <script src="<?=base_url()?>public/assets/themes/admin/plugins/jquery/jquery.min.js"></script>
    <style>
        .line{
            padding-bottom:5px;
            border-bottom:1px solid rgba(204, 204, 204, 0.35);
            margin:10px 0;
        }
    </style>
</head>
<body>

    
     
</body>


<body class="theme-blue">
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <div class="overlay"></div>
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- hearder -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="index.html">ADMINBSB - MATERIAL DESIGN</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
               
                <a href="<?=base_url()?>user/index" class="btn  btn-primary btn-raised pull-right waves-effect " style="margin-top:16px" data-placement="bottom"  data-toggle="tooltip" data-original-title="Quay lại">
					<i class="material-icons">keyboard_backspace</i> 
				</a>
            </div>
        </div>
    </nav>
    <!-- content -->
    <section class="content" style="margin-left:0px">
	<div class="container-fluid">
		<div class="row ">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="card">
					<div class="header">
						<h2>THÔNG TIN TÀI KHOẢN</h2>
					</div>
					<div class="body">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="thumbnail" style="height:200px">
                                    <img style="width:100%; height:100%;" src="<?= $user['avatar']?>" alt="">
                                </div>
                                <button class="btn btn-primary waves-effect btn-block" style="font-size:25px"><?= $user['name']?></button>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12" style="margin-left:20px;">
                                <h2>Thông tin cá nhân</h2>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="line">
                                            <span> <b>Tài khoản:</b> <?= $user['account']?></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="line">
                                            <span> <b>Họ và tên:</b> <?= $user['name']?></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="line">
                                            <span> <b>Email:</b> <?= $user['email']?></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="line">
                                            <span> <b>SĐT:</b> <?= $user['phone']?></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="line">
                                            <span> <b>Ngày sinh:</b> <?= $user['birthday']?></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="line">
                                            <span> <b>Giới tính:</b> <?= $user['gender']?></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="line">
                                            <span> <b>Địa chỉ:</b> <?= $user['address']?></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="line">
                                            <span> <b>Giới thiệu:</b> <?= $user['introduce']?></span>
                                        </div>
                                    </div>
                                </div>
                                <a href="<?= base_url() ?>/user/edit/<?=$user['account']?>" class=" btn btn-primary waves-effect btn-block">Cập nhật thông tin</a>
                               
                            </div>
                            
                        </div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


    

    <script src="<?= base_url() ?>public/assets/themes/admin/plugins/jquery/jquery.min.js"></script>
    <script src="<?=base_url()?>public/assets/themes/admin/plugins/bootstrap/js/bootstrap.js"></script>
    <script src="<?=base_url()?>public/assets/themes/admin/plugins/bootstrap-select/js/bootstrap-select.js"></script>
    <script src="<?=base_url()?>public/assets/themes/admin/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
    <script src="<?=base_url()?>public/assets/themes/admin/plugins/node-waves/waves.js"></script>

    <script src="<?=base_url()?>public/assets/themes/admin/js/admin.js"></script>
    <script src="<?=base_url()?>public/assets/themes/admin/js/demo.js"></script>
    <script src="<?=base_url()?>public/assets/themes/admin/js/sweetalert.min.js"></script>
    <script src="<?=base_url()?>public/assets/themes/admin/plugins/bootstrap-notify/bootstrap-notify.min.js"></script>
    <script src="<?=base_url()?>public/assets/themes/admin/js/pages/ui/tooltips-popovers.js"></script>
   
    </body>
</html>


   


    


    
    
    





