
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quản lí trung tâm</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
   
    <!-- <link rel="icon" href="<?=base_url()?>public/assets/favicon.ico" type="image/x-icon"> -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="<?=base_url()?>public/assets/themes/admin/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="<?=base_url()?>public/assets/themes/admin/plugins/node-waves/waves.css" rel="stylesheet" />
    <link href="<?=base_url()?>public/assets/themes/admin/plugins/animate-css/animate.css" rel="stylesheet" />
    <link href="<?=base_url()?>public/assets/themes/admin/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">
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
                <a class="navbar-brand" href="#">QUẢN LÍ TRUNG TÂM</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
               
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
						<h2>Lịch học khóa <?=$_course['nameCourse'] ?></h2>
					</div>
					<div class="body">
                        <form id="form_validation" action=""  method="POST" onsubmit="return false">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-basic-example">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Giảng viên</th>
                                            <th>Thời gian</th>
                                            <th>Thao tác</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($schedule as $key=>$sc){ ?>
                                        <tr>
                                            <td><?= $key+1 ?></td>
                                            <td><?php echo $sc['teacherID']; ?></td>
                                            <td><?php echo $sc['times']; ?></td>
                                            <td>
                                                
                                                <input name="group1" type="radio" class="with-gap" value="<?=$sc['classID']?>" id="<?= $key+1 ?>" />
                                                <label for="<?= $key+1 ?>"></label>
                                        
                                            </td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <button class="btn btn-primary waves-effect btn-block" style="margin-top:20px" onclick="payment()" type="submit">LƯU</button>
                        </form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- ----------------------- -->
<!-- <button type="button"  id="myModal" style="display:none" class="btn btn-default waves-effect" data-toggle="modal" data-target="#smallModal">MODAL - SMALL SIZE</button>
<div class="modal fade" id="smallModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="smallModalLabel">Modal title</h4>
            </div>
            <div class="modal-body">
            <form>
                <label for="email_address">Tài khoản</label>
                <div class="form-group">
                    <div class="form-line">
                        <input type="text" id="_account" name="account" class="form-control" autofocus placeholder="Nhập tài khoản" required>
                    </div>
                </div>
                <label for="password">Mật khẩu</label>
                <div class="form-group">
                    <div class="form-line">
                        <input type="password" id="_password" name="pass" class="form-control" placeholder="Nhập mật khẩu">
                    </div>
                </div>

                <input type="checkbox" id="remember_me" class="filled-in">
                <label for="remember_me">Remember Me</label>
                <br>
                <button type="button" class="btn btn-primary m-t-15 waves-effect" id="submit">LOGIN</button>
                <button type="button" class="btn btn-danger m-t-15 waves-effect" data-dismiss="modal">CLOSE</button>
            </form>
            </div>
        </div>
    </div>
</div> -->

<button type="button"  id="myModal2" style="display:none" class="btn btn-default waves-effect" data-toggle="modal" data-target="#defaultModal">MODAL - SMALL SIZE</button>
<div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="background:black">
            <div class="modal-header">
                <h4 class="modal-title" id="defaultModalLabel" style="color:white">Thanh toán online</h4>

            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div>
                            <?php echo $qrcode;?>   
                        </div>
                        <p style="margin-top:15px;">
                            Quét mã QR đẻ thanh toán qua ZaloPay 
                        </p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="color:white">
                        <p style="width:100%; margin-bottom:0">Khóa học: </p>
                        <h3 style=" color:yellow;"> <?=$_course['nameCourse']?></h3>
                        <p>Tổng số tiền:  $ <?=$_course['price']?> </p>
                        <p>Thanh toán cho tài khoản: <?=$_SESSION["user"]->account?></p>
                        <p style="">
                            <img style="width:100%" src="https://www.paypalobjects.com/webstatic/mktg/Logo/AM_SbyPP_mc_vs_ms_ae_UK.png" alt="">
                        </p>
                    </div>
                </div>
               
               
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary waves-effect"  id="pay">Thanh toán</button>
                <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Hủy</button>
            </div>
        </div>
    </div>
</div>

    

    <script src="<?= base_url() ?>public/assets/themes/admin/plugins/jquery/jquery.min.js"></script>
    <script src="<?=base_url()?>public/assets/themes/admin/plugins/bootstrap/js/bootstrap.js"></script>
    <script src="<?=base_url()?>public/assets/themes/admin/plugins/bootstrap-select/js/bootstrap-select.js"></script>
    <script src="<?=base_url()?>public/assets/themes/admin/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
    <script src="<?=base_url()?>public/assets/themes/admin/plugins/node-waves/waves.js"></script>

    <script src="<?=base_url()?>public/assets/themes/admin/plugins/jquery-inputmask/jquery.inputmask.bundle.js"></script>
    <script src="<?=base_url()?>public/assets/themes/admin/plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="<?=base_url()?>public/assets/themes/admin/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="<?=base_url()?>public/assets/themes/admin/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>

    <script src="<?=base_url()?>public/assets/themes/admin/js/admin.js"></script>
    <script src="<?=base_url()?>public/assets/themes/admin/js/main.js"></script>
    <script src="<?=base_url()?>public/assets/themes/admin/js/demo.js"></script>
    <script src="<?=base_url()?>public/assets/themes/admin/js/sweetalert.min.js"></script>
    <script src="<?=base_url()?>public/assets/themes/admin/plugins/bootstrap-notify/bootstrap-notify.min.js"></script>
    <script src="<?=base_url()?>public/assets/themes/admin/js/pages/ui/tooltips-popovers.js"></script>
   
    <script>
        function payment(){
            var classID = $("input[name='group1']:checked").val();
            $.post(
                '<?=base_url() ?>home/payment',
                {
                    classID :classID
                },
                function(result){
                    console.log(result);
                    if(result.isSuccess == true){
                        $("#myModal2").trigger('click');
                        $('#pay').click(function(){
                            $.post(
                                '<?=base_url()?>home/add_student',
                                {
                                    data : result.data
                                },
                                function(res){
                                    console.log(res);
                                    swal({
                                        title: 'THÔNG BÁO',
                                        type: res.isSuccess == true ? 'success' : 'error',
                                        text: res.message
                                    }, function() {
                                        if(res.isSuccess == true){
                                            window.location.href = `<?=base_url()?>home/detail_course/${res.data}`;
                                        }
                                    
                                    });
                                }
                            )
                        })
                    }
                    else{
                        swal({
                            title: 'THÔNG BÁO',
                            type: 'error',
                            text: result.message
                        }, function() {
                            window.location.reload();
                        });
                    }
                    
                    
                }
            );
       
        }
    </script>

        <script>
            function addStudent(){}
        </script>

    </body>
</html>


   


    


    
    
    





