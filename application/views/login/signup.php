<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Sign Up </title>
    <!-- Favicon-->
    <link rel="icon" href="<?=base_url() ?>public/assets/themes/admin/favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <link href="<?=base_url() ?>public/assets/themes/admin/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="<?=base_url() ?>public/assets/themes/admin/plugins/node-waves/waves.css" rel="stylesheet" />
    <link href="<?=base_url() ?>public/assets/themes/admin/plugins/animate-css/animate.css" rel="stylesheet" />
    <link href="<?=base_url() ?>public/assets/themes/admin/plugins/sweetalert/sweetalert.css" rel="stylesheet" />
    <link href="<?=base_url() ?>public/assets/themes/admin/css/style.css" rel="stylesheet">
    <script src="<?=base_url()?>public/assets/themes/admin/plugins/jquery/jquery.min.js"></script>
    <style type="text/css">
        
        /* body{
            background-color: #00BCD4;
        } */
        body .signup-page {
            margin:1% auto  !important;
            max-width:450px;
        }
    </style>
</head>

<body class="signup-page">

    <div >
         <div class="signup-box">
            <div class="logo">
                <a href="javascript:void(0);">ĐĂNG KÍ</a>
            </div>
            <div class="card">
                <div class="body">
                    <form id="sign_up"  method="POST" onsubmit="return false">
                        <div class="msg">Đăng kí tài khoản mới</div>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="material-icons">person</i>
                            </span>
                            <div class="form-line">
                                <input type="text" class="form-control" name="account" id="account" placeholder="Tài khoản" required autofocus>
                            </div>
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="material-icons">lock</i>
                            </span>
                            <div class="form-line">
                                <input type="password" class="form-control" name="pass" id="pass" minlength="6" placeholder="Mật khẩu" required>
                            </div>
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="material-icons">person</i>
                            </span>
                            <div class="form-line">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Họ tên" required >
                            </div>
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="material-icons">email</i>
                            </span>
                            <div class="form-line">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email " required>
                            </div>
                        </div>
                        
                        <div class="input-group">
                            <input name="gender" value="Nam" type="radio" id="Nam"  class="with-gap " required checked>
                            <label for="Nam" style="margin-right:20px">Nam</label>
                            <input name="gender" value="Nữ" type="radio" id="Nữ"  class="with-gap  " required>
                            <label for="Nữ">Nữ</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="terms" id="terms" class="filled-in chk-col-pink">
                            <label for="terms">Tôi đã đọc và đồng ý với <a href="javascript:void(0);">các điều khoản sử dụng</a>.</label>
                        </div>

                        <button class="btn btn-block btn-lg bg-pink waves-effect" id="signup" type="submit" onclick="dangki()" >Đăng kí</button>

                        <div class="m-t-25 m-b--5 align-center">
                            <a href="<?= base_url()?>login">You already have a membership?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
   
    <script src="<?=base_url()?>public/assets/themes/admin/js/bootstrap-notify.min.js"></script>
    <script src="<?=base_url()?>public/assets/themes/admin/js/common.js"></script>
        <script src="<?=base_url()?>public/assets/themes/admin/js/sweetalert.min.js"></script>
    <!-- <script>
        function dangki(){
            // $('#signup').click(function(){

            
            var self = this;
            var account = $('#account').val();
            var name = $('#name').val();
            var pass = $('#pass').val();
            var email = $('#email').val();
            var email_validate = email.indexOf('.@');
            console.log(email_validate);
            var gender = $("input[name='gender']:checked").val();
            if(!account || !name || !pass || email_validate == -1 ||!gender  ){
				return;
			}
			else{
                $.ajax({
                    url: "<?php echo base_url('login/singup_ajax'); ?>",
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        account: account,
                        pass: pass,
                        name: name,
                        email: email,
                        gender: gender
                        },
                })
                .done(function(result) {
                    console.log(result);
                    self.noti(result.message);
                    window.location.href = "<?=base_url()?>login";
                })
                .fail(function() {
                    console.log("error");
                })
                .always(function(res) {
                    // console.log("alwways" + result);
                });
            }
        // })
        }
    </script> -->

    <script>
        function dangki(){
            var self = this;
            var account = $('#account').val();
            var name = $('#name').val();
            var pass = $('#pass').val();
            var email = $('#email').val();
            var email_validate = email.indexOf('@');
            var gender = $("input[name='gender']:checked").val();
            if(!account || !name || !pass || email_validate == -1 ||!gender  ){
				return;
            }
            else{
                $.post(
                '<?=base_url()?>login/singup_ajax',
                {
                    account: account,
                    pass: pass,
                    name: name,
                    email: email,
                    gender: gender
                },
                function(result){
                    console.log(result);

                    // self.noti(result.message);
                    // if(result.isSuccess){
                    //     window.location.href = "<?=base_url()?>login";
                    // }
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
        
    </script>
</body>

</html>