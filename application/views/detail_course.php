<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="img ">
          <img class="img-thumbnail" src="<?= $_course['image']?>" alt="">
        </div>
        <h2 class="mt-3">Khóa học: <?= $_course['nameCourse']?></h2>
        <a class="btn btn-success waves-effect btn-block" style="margin-top:20px" href="<?= base_url() ?>cource/listLesson/<?=$_course['courseID']?>" >Danh sách bài học</a>
      </div>
      <div class="col-lg-8  col-md-8 col-sm-8 col-xs-12 pl-5" >
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


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
