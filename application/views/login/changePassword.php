<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Forgot Password | Bootstrap Based Admin Template - Material Design</title>
    <!-- Favicon-->
    <link rel="icon" href="<?=base_url() ?>public/assets/themes/admin/favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="<?=base_url() ?>public/assets/themes/admin//plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="<?=base_url() ?>public/assets/themes/admin/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="<?=base_url() ?>public/assets/themes/admin/plugins/animate-css/animate.css" rel="stylesheet" />
    <link href="<?=base_url() ?>public/assets/themes/admin/plugins/sweetalert/sweetalert.css" rel="stylesheet" />
    <!-- Custom Css -->
    <link href="<?=base_url() ?>public/assets/themes/admin/css/style.css" rel="stylesheet">
</head>

<body class="fp-page">
    <div class="fp-box">
        <div class="logo">
            <a href="javascript:void(0);">Admin<b>BSB</b></a>
            <small>Admin BootStrap Based - Material Design</small>
        </div>
        <div class="card">
            <div class="body">
                <form id="forgot_password"   onsubmit="return false">
                    <div class="msg">
                        Thay đổi mật khẩu của bạn 
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">visibility_off</i>
                        </span>
                        <div class="form-line">
                            <input type="password" id="pass" class="form-control" id="email" name="pass" placeholder="Mật khẩu mới" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">visibility</i>
                        </span>
                        <div class="form-line">
                            <input type="password" id="confirm" class="form-control" id="email" name="confirm" placeholder="Xác nhận" required autofocus>
                        </div>
                    </div>
                    <button class="btn btn-block btn-lg bg-pink waves-effect" type="submit" onclick="change()">Xác nhận</button>

                    <div class="row m-t-20 m-b--5 align-center">
                        <a href="<?= base_url()?>login">Sign In!</a>
                    </div>
                </form>
               
            </div>
        </div>
    </div>

    <!-- Jquery Core Js -->
    <script src="<?=base_url() ?>public/assets/themes/admin/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="<?=base_url() ?>public/assets/themes/admin/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?=base_url() ?>public/assets/themes/admin/plugins/node-waves/waves.js"></script>

    <!-- Validation Plugin Js -->
    <script src="<?=base_url() ?>public/assets/themes/admin/plugins/jquery-validation/jquery.validate.js"></script>
    <script src="<?=base_url()?>public/assets/themes/admin/js/sweetalert.min.js"></script>
    <!-- Custom Js -->
    <script src="<?=base_url() ?>public/assets/themes/admin/js/admin.js"></script>
    <script src="<?=base_url() ?>public/assets/themes/admin/js/pages/examples/forgot-password.js"></script>


  <script>
    // $(function(){
    //   $(document).ajaxStart(function() {
    //       $(".page-loader-wrapper").css({"display":"block"});
    //   });
    //   $(document).ajaxStop(function(){
    //       $(".page-loader-wrapper").css({"display":"none"});
    //   });
    // });
      function change(){
        var pass =$("#pass").val();
        var confirm = $('#confirm').val();
        if(!pass || !confirm ){
          return;
        }
        else{
            if(pass != confirm){
                alert("Xác nhận mật khẩu chưa khớp!")
            }
            else{
                $.post(
                    '<?= base_url() ?>login/changePassword',
                    {
                    pass: pass
                    },function(result){
                        swal({
                        title: 'THÔNG BÁO',
                        type: result.isSuccess == true ? 'success' : 'error',
                        text: result.message
                        }, function() {
                            
                            if(result.isSuccess){
                                window.location.href = "<?=base_url()?>login";
                            }
                            else{
                                window.location.reload();
                            }
                        
                        });
                    }
                );
            }
         
        }
      }
    </script>
  
  </body>

</html>