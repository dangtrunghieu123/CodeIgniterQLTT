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
            <!-- Tabs With Custom Animations -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                KHÓA HỌC CỦA TÔI
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
                                        <li role="presentation" class="active"><a href="#home_animation_3" data-toggle="tab">DANH SÁCH KHÓA HỌC</a></li>
                                        <li role="presentation"><a href="#profile_animation_3" data-toggle="tab">THỜI KHÓA BIỂU</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane animated fadeInRight active"  id="home_animation_3">
                                            
                                            <?php foreach($myCourse as $value){?>
                                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                    <div class="card c-card">
                                                        <img src="<?= $value['image'] ?>" width="100%">
                                                        <div class="body">
                                                            <div class="class_time">Classes <i class="fa fa-clock-o"></i> 10 am - 11 am</div>
                                                            <h3>
                                                                <a  href="<?= base_url() ?>student/listLesson/<?=$value['courseID']?>">
                                                                    <?php
                                                                        $str = $value['nameCourse'];
                                                                        if(strlen($str) >30 ){
                                                                            $string = substr($str,0,30);
                                                                            echo $string . "...";
                                                                        }
                                                                        else{
                                                                            echo $value['nameCourse'];
                                                                        }
                                                                    ?>
                                                                </a>
                                                                
                                                            </h3>
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
                                        <div role="tabpanel" class="tab-pane animated fadeInRight" id="profile_animation_3">
                                           
                                            <div class="table-responsive">
                                                <table class="table table-bordered table-striped table-hover dataTable js-basic-example">
                                                    <thead>
                                                        <tr>
                                                            <th>Tên khóa học</th>
                                                            <th>thời gian</th>
                                                            <th>Giảng viên</th>
                                                            <th>Tình trạng</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach($myCourse as $t){ ?>
                                                            <tr>
                                                                
                                                                <td><?php echo $t['nameCourse']; ?></td>
                                                                <td><?php echo $t['times']; ?></td>
                                                                <td><?php echo $t['teacherID']; ?></td>
                                                                <td><?php echo $t['result']; ?></td>
                                                            </tr>
                                                        <?php } ?>
                                                    </tbody>
                                                </table>
                                            </div>


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
    




