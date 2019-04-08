<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Sign Up | Bootstrap Based Admin Template - Material Design</title>
    <!-- Favicon-->
    <link rel="icon" href="<?=base_url() ?>public/assets/themes/admin/favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <link href="<?=base_url() ?>public/assets/themes/admin/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="<?=base_url() ?>public/assets/themes/admin/plugins/node-waves/waves.css" rel="stylesheet" />
    <link href="<?=base_url() ?>public/assets/themes/admin/plugins/animate-css/animate.css" rel="stylesheet" />
    <link href="<?=base_url() ?>public/assets/themes/admin/css/style.css" rel="stylesheet">
    <style type="text/css">
        
        body{
            background-color: #00BCD4;
        }
        body .signup-page {
            margin:1% auto  !important;
            max-width:450px;
        }
    </style>
</head>

<body >

    <div class="signup-page">
         <div class="signup-box">
            <div class="logo">
                <a href="javascript:void(0);">ĐĂNG KÍ</a>
            </div>
            <div class="card">
                <div class="body">
                    <form id="sign_up" method="POST">
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

                        <button class="btn btn-block btn-lg bg-pink waves-effect" onclick="signup()" type="submit">Đăng kí</button>

                        <div class="m-t-25 m-b--5 align-center">
                            <a href="sign-in.html">You already have a membership?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
   
  

    <script src="<?=base_url() ?>public/assets/themes/admin/plugins/jquery/jquery.min.js"></script>
    <script src="<?=base_url() ?>public/assets/themes/admin/plugins/bootstrap/js/bootstrap.js"></script>
    <script src="<?=base_url() ?>public/assets/themes/admin/plugins/node-waves/waves.js"></script>
    <script src="<?=base_url() ?>public/assets/themes/admin/plugins/jquery-validation/jquery.validate.js"></script>
    <script src="<?=base_url() ?>public/assets/themes/admin/js/admin.js"></script>
	<script src="<?=base_url() ?>public/assets/themes/admin/js/pages/examples/sign-up.js"></script>
	<script src="<?=base_url() ?>public/assets/themes/admin/js/pages/examples/sign-in.js"></script>

    <script>
        function signup(){
            var self = this;
            var account = $('#account').val();
            var name = $('#name').val();
            var pass = $('#pass').val();
            var email = $('#email').val();
            var gender = $("input[name='gender']:checked").val();
            $.post(
                '<?=base_url()?>login/signup',
                {
                    account: account,
                    pass: pass,
                    name: name,
                    email: email,
                    gender: gender
                },
                function(result){
                    console.log(result);
                    swal({
                        title: 'THÔNG BÁO',
                        type: result.isSuccess == true ? 'success' : 'error',
                        text: result.message
                    }, function() {
                        window.location.reload();
                    });
                }
            )

        }
    </script>
</body>

</html>