<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link href="<?=base_url()?>public/assets/themes/admin/js/sweetalert.css" rel="stylesheet" />
<script src="<?=base_url()?>public/assets/themes/admin/plugins/jquery/jquery.min.js"></script>

    <style>
    body, html {
    height: 100%;
    margin: 0;
    font-family: Arial, Helvetica, sans-serif;
    }

    * {
    box-sizing: border-box;
    }

    .bg-image {

    background-image: url("<?= $_course['image']?>");
    
    filter: blur(8px);
    -webkit-filter: blur(8px);

    height: 100%; 
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    }


    .bg-text {
    background-color: rgb(0,0,0);
    background-color: rgba(0,0,0, 0.4);
    color: white;
    font-weight: bold;
    position: absolute;
    top: 0%;
    left: 0%;
    /* transform: translate(-50%, -50%); */
    z-index: 2;
    width: 100%;
    height:100%;

    padding: 20px;
    text-align: center;
    }
    .img{
      height:240px;
    }
    img{
      width:100%;
      height:100% !important;
    }
    .content{
      border: 3px solid #f1f1f1;
      text-align:left;
      padding:20px;
      /* color:black; */
    }
    </style>
</head>
<body>

<div class="bg-image"></div>

<div class="bg-text">
  <div class="container py-5">
    <div class="row">
      <div class="col-lg-4">
        <div class="img ">
          <img class="img-thumbnail" src="<?= $_course['image']?>" alt="">
        </div>
        <h2 class="mt-3">Khóa học: <?= $_course['nameCourse']?></h2>
        <!-- <a class="btn btn-success waves-effect btn-block" href="<?=base_url() ?>home/regCourse/<?= $_course['courseID']?>" style="font-size:25px; margin-top:20px;">Đăng kí khóa học</a> -->
        <button class="btn btn-success waves-effect btn-block" onclick="loginC(<?= $_course['courseID']?>)" style="font-size:25px; margin-top:20px;">Đăng kí khóa học</button>

      </div>
      <div class="col-lg-8 pl-5" >
        <h2 class="mb-5">Thông tin khóa học</h2>
        <div class="content ">
            <p>
              <span> <b>Tên khóa học: </b> <?= $_course['nameCourse']?></span>
            </p>
            <p>
              <span> <b>Người tạo: </b> <?= $_course['author']?></span>
            </p>
            <p>
              <span> <b>Gía: </b> <?= $_course['price']?></span>
            </p>
            <p>
              <span> <b>Giới thiệu khóa học: </b> <?= $_course['description']?></span>
            </p>
        </div>
      </div>
    </div>
  </div>
 

</div>


<!-- ----------------------- -->
<button type="button"  id="myModal" style="display:none" class="btn btn-default waves-effect" data-toggle="modal" data-target="#smallModal">MODAL - SMALL SIZE</button>
<div class="modal fade" id="smallModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="smallModalLabel">Đăng nhập</h4>
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
</div>


<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="<?=base_url()?>public/assets/themes/admin/js/sweetalert.min.js"></script>

<script>
  function loginC(courseID){
    if(courseID){
      $.post(
              '<?=base_url() ?>home/checkLogin',
              {
                  courseID :courseID
              },
              function(result){
                  console.log(result);
                  if(result.isSuccess == true){
                    window.location.href="<?=base_url() ?>home/regCourse/<?= $_course['courseID']?>";
                  }
                  else{
                    swal({
                      title: 'THÔNG BÁO',
                      type: 'error',
                      text: result.message
                  }, function() {
                      // if(result.isSuccess == true){
                      //   window.location.href="<?=base_url() ?>home/regCourse/<?= $_course['courseID']?>";
                      // }
                      // else{
                          $("#myModal").trigger('click');
                          $('#submit').click(function(){
                              var _account = $('#_account').val();
                              var _password = $('#_password').val();
                              $.post(
                                  '<?=base_url()?>home/login_regC',
                                  {
                                      account:  _account,
                                      pass: _password
                                  },
                                  function(res){
                                      console.log(res);
                                      if(res.isSuccess == false){
                                          alert(res.message);
                                      }
                                      else{
                                          window.location.href="<?=base_url() ?>home/regCourse/<?= $_course['courseID']?>";
                                          
                                      }
                                  }
                              )
                          })
                      // }
                  
                  });
                  }
                  
              }
          );
    }
       
  }
</script>
</body>
</html>
