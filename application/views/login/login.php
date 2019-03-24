<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="<?=base_url()?>public/assets/css/login.css">
<div class="cotn_principal">
	<div class="cont_centrar">
		<div class="cont_login">
			<div class="cont_info_log_sign_up">
				<div class="col_md_login ">
					<div class="cont_ba_opcitiy">

						<h2>LOGIN</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
						<button class="btn_login" onclick="cambiar_login()">LOGIN</button>
					</div>
				</div>
				<div class="col_md_sign_up ">
					<div class="cont_ba_opcitiy">
						<h2>SIGN UP</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

						<button class="btn_sign_up" onclick="cambiar_sign_up()">SIGN UP</button>
					</div>
				</div>
			</div>


			<div class="cont_back_info">
				<div class="cont_img_back_grey">
					<img src="https://images.unsplash.com/42/U7Fc1sy5SCUDIu4tlJY3_NY_by_PhilippHenzler_philmotion.de.jpg?ixlib=rb-0.3.5&q=50&fm=jpg&crop=entropy&s=7686972873678f32efaf2cd79671673d"
					 alt="" />
				</div>

			</div>
			<div class="cont_forms">
				<div class="cont_img_back_">
					<img src="https://images.unsplash.com/42/U7Fc1sy5SCUDIu4tlJY3_NY_by_PhilippHenzler_philmotion.de.jpg?ixlib=rb-0.3.5&q=50&fm=jpg&crop=entropy&s=7686972873678f32efaf2cd79671673d"
					 alt="" />
				</div>
				<div class="cont_form_login">
					<a href="#" onclick="ocultar_login_sign_up()">
						<i class="material-icons">&#xE5C4;</i>
					</a>
					<h2>LOGIN</h2>
					<form action="">
						<input type="text" placeholder="Email" />
						<input type="password" placeholder="Password" />
						<button class="btn_login" onclick="cambiar_login()">LOGIN</button>
					</form>
					<div style="text-align:center;margin-top:10px">
						<a href="#" >Quên mật khẩu</a>
					</div>
				</div>

				<div class="cont_form_sign_up">
					<a href="#" onclick="ocultar_login_sign_up()">
						<i class="material-icons">&#xE5C4;</i>
					</a>
					<h2>SIGN UP</h2>
					<form action="">
						<input type="text" placeholder="Tài khoản" />
						<input type="password" placeholder="Mật khẩu" />
						<input type="text" placeholder="Họ tên"/>
						<div class="form-group form-radio">
							<label for="">Nữ</label>
							<input type="radio" name="gender" id="radio1" value="male" checked>
							<label for="">Nam</label>
							<input type="radio" name="gender" id="radio2" value="female">
							
						</div>
						<button class="btn_sign_up" onclick="cambiar_sign_up()">SIGN UP</button>
					</form>

				</div>

			</div>

		</div>
	</div>
</div>

<div class="screan_xs">
	<div class="head">
		<p>Đăng nhập / Đăng kí</p>
	</div>
	<div class="form-login">
		<!-- <div class="row">
			<div class="col-xs-12">

			</div>
		</div> -->
		<div class="container">
			<h2 class="text-left"  style="margin:50px 0;border-bottom:1px solid black;padding-bottom:10px;">Form đăng nhập</h2>
			<form action="">
				<div class="form-group">
					<label for="">Tài khoản</label>
					<input type="text" class="form-control" >
				</div>
				<div class="form-group">
					<label for="">Mật khẩu</label>
					<input type="text" class="form-control" >
				</div>
				<button class="btn btn-primary w-100">Đăng nhập</button>
			</form>
			<div class="foget text-right mt-4">
				<a href="#" style="text-decoration:none">Quên mật khẩu</a>
			</div>
		</div>
	</div>

	<div class="form-reg">
		<!-- <div class="row">
			<div class="col-xs-12">

			</div>
		</div> -->
		<div class="container">
			<h2 class="text-left" style="margin:50px 0;border-bottom:1px solid black;padding-bottom:10px;">Form đăng kí</h2>
			<form action="" class="pb-5">
				<div class="form-group">
					<label for="">Tài khoản</label>
					<input type="text" class="form-control" >
				</div>
				<div class="form-group">
					<label for="">Mật khẩu</label>
					<input type="text" class="form-control" >
				</div>
				<div class="form-group">
					<label for="">Họ tên</label>
					<input type="text" class="form-control">
				</div>
				<div class="form-group">
					<label for="">Tài khoản</label>
					<input type="text" class="form-control">
				</div>
				<div class="form-group">
					<label for="">Nữ</label>
					<input type="radio" style="margin-right:20px;" name="gender"  value="male" checked>
					<label for="">Nam</label>
					<input type="radio" name="gender"  value="female">
					
				</div>
				<button class="btn btn-primary w-100">Đăng ký</button>
			</form>
		</div>
	</div>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="<?=base_url()?>public/assets/js/login.js"></script>
