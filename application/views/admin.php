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
        <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">playlist_add_check</i>
                        </div>
                        <div class="content">
                            <div class="text">NEW TASKS</div>
                            <div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20">125</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">help</i>
                        </div>
                        <div class="content">
                            <div class="text">NEW TICKETS</div>
                            <div class="number count-to" data-from="0" data-to="257" data-speed="1000" data-fresh-interval="20">257</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-green hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">forum</i>
                        </div>
                        <div class="content">
                            <div class="text">NEW COMMENTS</div>
                            <div class="number count-to" data-from="0" data-to="243" data-speed="1000" data-fresh-interval="20">243</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-orange hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">person_add</i>
                        </div>
                        <div class="content">
                            <div class="text">NEW VISITORS</div>
                            <div class="number count-to" data-from="0" data-to="1225" data-speed="1000" data-fresh-interval="20">1225</div>
                        </div>
                    </div>
                </div>
            </div>
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
                           <div class="row">
                                <?php foreach($_course as $value){?>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="card c-card">
                                            <img src="<?= $value['image'] ?>" width="100%">
                                            <div class="body">
                                                <div class="class_time">Classes <i class="fa fa-clock-o"></i> 10 am - 11 am</div>
                                                <h3>
                                                 <!-- <a  href="<?= base_url() ?>student/listLesson/<?=$value['courseID']?>"> -->
                                                    <a  href="<?= base_url() ?>cource/detail_course/<?=$value['courseID']?>">
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
                            
                        </div>
                    </div>
            </div>
            <!-- #END# Tabs With Custom Animations -->
        </div>
    </section>
    


<script>

function btnClick(self){
    var id = self.value;
    if(id){
        $.post(
            "<?= base_url()?>user_clas/fetch_by_courseID",
            {
                courseID:id,
            },function(data) {
                $('#classID').html(data);
                $('#classID').selectpicker('refresh');
            });
    }
}
</script>

<script>


function classClick(self){
    var id = self.value;
    alert(id);
    if(id){
            data = { id: id };
            refesh_datatable("<?= base_url('user_clas/student_by_classID') ?>",data);
    
    }
}


function refesh_datatable(url,data)
{
    var dataTable = $('#exportables').DataTable();         
    function loaddatatable(){
        dataTable = $('#exportables').DataTable({
        select: true,
        responsive: true,
        processing:true,
        retrieve:true,
        ajax:{
                url:url,
                type:"POST",
                data: data
        },
        columns: [
            { data: "id" },
            { data: "studentID" },
            { data: "status" },
            { data: "result" },
            { data: "action" }
        ],
        language: {
            decimal:        "",
            emptyTable:     "Dữ liệu rỗng",
            info:           "Hiển thị từ _START_ đến _END_ trong tổng cộng _TOTAL_ dòng",
            infoEmpty:      "Dữ liệu rỗng",
            infoFiltered:   "(tìm kiếm từ _MAX_ dòng)",
            nfoPostFix:    "",
            thousands:      ",",
            lengthMenu:     'Hiển thị _MENU_ dòng',
            loadingRecords: "Đang tải...",
            processing:     "Đang xử lý...",
            search:         '<label class="control-label">Tìm kiếm</label>',
            zeroRecords:    "Không tìm thấy",
            paginate: {
                first:      "Đầu",
                last:       "Cuối",
                next:       "»",
                previous:   "«"
            },
            aria: {
                sortAscending:  ": activate to sort column ascending",
                sortDescending: ": activate to sort column descending"
            }
        },
        aoColumnDefs : [ {
            bSortable : false,
            aTargets : [ "no-sort" ]
        }]
    }); 
    }
    loaddatatable();
    dataTable.destroy();
    loaddatatable();
}
</script>