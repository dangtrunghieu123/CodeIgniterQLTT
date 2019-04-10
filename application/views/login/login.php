<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V15</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?=base_url() ?>public/assets/themes/loginAdmin/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url() ?>public/assets/themes/loginAdmin/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url() ?>public/assets/themes/loginAdmin/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url() ?>public/assets/themes/loginAdmin/vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url() ?>public/assets/themes/loginAdmin/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url() ?>public/assets/themes/loginAdmin/vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url() ?>public/assets/themes/loginAdmin/vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url() ?>public/assets/themes/loginAdmin/vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url() ?>public/assets/themes/loginAdmin/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url() ?>public/assets/themes/loginAdmin/css/main.css">
	<style>
		.txt2{
			margin:20px 0 20px auto;
			font-size:20px;
		}
	</style>
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(<?=base_url()?>public/assets/themes/loginAdmin/images/bg-01.jpg);">
					<span class="login100-form-title-1">
						Sign In
					</span>
				</div>

				<form class="login100-form validate-form" method="POST" onsubmit="return false">
					<div class="wrap-input100 validate-input m-b-26" data-validate="Yêu cầu nhập tài khoản">
						<span class="label-input100">Tài khoản</span>
						<input class="input100" type="text" id="account" name="account" placeholder="Nhập tài khoản">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Yêu cầu nhập mật khẩu">
						<span class="label-input100">Mật khẩu</span>
						<input class="input100" type="password" id="pass" name="pass" placeholder="Nhập mật khẩu ">
						<span class="focus-input100"></span>
					</div>

					<div class="flex-sb-m w-full p-b-30">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Nhớ tài khoản
							</label>
						</div>

						<div>
							<a href="<?= base_url()?>login/forgetPassword" class="txt1">
								Quên mật khẩu ?
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" onclick="dangnhap()">
							Đăng nhập
						</button>
						<a href="<?= base_url()?>signup" class="txt2">
							<i class="fa fa-long-arrow-right"></i>
							<span>Đăng kí</span>	
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	<script src="<?=base_url() ?>public/assets/themes/loginAdmin/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="<?=base_url()?>public/assets/themes/admin/js/bootstrap-notify.min.js"></script>
    <script src="<?=base_url()?>public/assets/themes/admin/js/common.js"></script>
	<script src="<?=base_url() ?>public/assets/themes/loginAdmin/vendor/animsition/js/animsition.min.js"></script>
	<script src="<?=base_url() ?>public/assets/themes/loginAdmin/vendor/bootstrap/js/popper.js"></script>
	<script src="<?=base_url() ?>public/assets/themes/loginAdmin/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?=base_url() ?>public/assets/themes/loginAdmin/vendor/select2/select2.min.js"></script>
	<script src="<?=base_url() ?>public/assets/themes/loginAdmin/vendor/daterangepicker/moment.min.js"></script>
	<!-- <script src="<?=base_url() ?>public/assets/themes/loginAdmin/vendor/daterangepicker/daterangepicker.js"></script> -->
	<script src="<?=base_url() ?>public/assets/themes/loginAdmin/vendor/countdowntime/countdowntime.js"></script>
	
	<script src="<?=base_url() ?>public/assets/themes/loginAdmin/js/main.js"></script>
	<script src="<?=base_url()?>public/assets/themes/admin/js/bootstrap-notify.min.js"></script>
    <script src="<?=base_url()?>public/assets/themes/admin/js/common.js"></script>

	  <script>
        function dangnhap(){
            var self = this;
            var account = $('#account').val();
            var pass = $('#pass').val();
            if(!account || !pass ){
				return;
            }
            else{
                $.post(
                '<?=base_url()?>login/login',
                {
                    account: account,
                    pass: pass
                },
                function(result){
                    console.log(result);
					self.noti(result.message);
					
                    if(result.isSuccess){
						
						var interval_obj = setInterval(function(){
							window.location.href = "<?=base_url()?>admin";
							clearInterval(interval_obj);
						}, 3000);
                    }
                }
            );
            }
           
        }
        
    </script>

</body>
</html>