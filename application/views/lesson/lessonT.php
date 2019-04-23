
<style>
.iframe{
	max-height:500px;
	overflow-y: scroll;
}
	.iframe iframe{
		width:300px;
		height:200px;
	}
[type="checkbox"]:not(:checked), [type="checkbox"]:checked {
        left:70px !important;
        opacity:1 !important;
    }
</style>
<section class="content">
	<div class="container-fluid">
		<div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="card">
					<div class="header">
						<a href="<?=base_url()?>lesson/addT" class="btn btn-primary btn-raised pull-right waves-effect m-t--10"  data-toggle="tooltip" data-original-title="Thêm bài học">
							<i class="material-icons">add</i> 
						</a>
						<h2>QUẢN LÝ BÀI HỌC</h2>
					</div>
					<div class="body">
						<div class="table-responsive">
							<table class="table table-bordered table-striped table-hover dataTable js-basic-example">
								<thead>
                                    <tr>
                                        
                                        <th>Tên bài học</th>
                                        <th>Người tạo</th>
                                        <th>Nội dung</th>
                                        <th>Thao tác</th>
                                    </tr>
								</thead>
								<tbody>
                                    
                                     <?php foreach($lesson as $l){ ?>
                                        <tr>
                                            <td><?php echo $l['nameLesson']; ?></td>
                                            <td><?php echo $l['author']; ?></td>
                                            <td class="iframe"><?php echo $l['content']; ?></td>
                                          
                                            <td>
                                                <a href="<?php echo site_url('lesson/editT/'.$l['lessonID']); ?>" data-toggle="tooltip" data-original-title="Sửa bài học" class="btn btn-warning btn-xs"><i class='material-icons'>edit</i></a> 
												<a onclick="onDelete('<?=$l['lessonID']?>','<?=$l['nameLesson']?>')" class="btn btn-danger btn-xs"
												 data-toggle="tooltip" data-original-title="Xóa">
													<i class="material-icons">delete</i>
												</a>
                                                <a onclick="onAdd(<?=$l['lessonID']?>)"  data-toggle="modal" data-target="#defaultModal" class="btn btn-primary  btn-xs"
												 data-toggle="tooltip" data-original-title="Thêm vào khóa học">
													<i class="material-icons">add</i>
												</a>
                                                
                                            </td>
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
</section>

<!-- Default Size -->
<div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="defaultModalLabel">Modal title</h4>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover dataTable js-basic-example">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Tên khóa học</th>
                                <!-- <th>Người tạo</th> -->
                                
                            </tr>
                        </thead>
                        <tbody>
                            
                            <?php foreach($_cource as $c){ ?>
                                <tr>
                                    <td>
                                        <form action="">
                                            <input type="checkbox"   class="check" value="<?=$c['courseID'] ?>"  class="filled-in chk-col-light-green" >
                                        </form>
                                    </td>
                                    <td><?php echo $c['nameCourse']; ?></td>
                                   
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button"  id="getCourseID" class="btn btn-link btn-primary waves-effect">SAVE CHANGES</button>
                <button type="button" class="btn btn-link btn-danger waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</div>


                      
<script>
	 function onDelete(id,name){
        var self = this;
        if(id){
            swal({
                title: "Xóa khóa học " + name,
                text: "Bạn chắc chắn muốn xóa bài học này?",
                type: "info",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Có",
                cancelButtonText: "Không",
                closeOnConfirm: false,
                showLoaderOnConfirm: true
            }, function() {
                $.post(
                    '<?=base_url()?>lesson/remove',
					{id:id},
                    function(result){
                        console.log(result);
                        console.log("test");
                        swal({
                            title: 'THÔNG BÁO',
                            type: result.isSuccess == true ? 'success' : 'error',
                            text: result.message
                        }, function() {
                            window.location.reload();
                        });
                    }
                );
            });
        }
    }
	// $(document).ajaxStop(function(){
    //         $('[data-toggle="tooltip"]').tooltip();
    //     });
</script>

<script>
    function onAdd(id){
        $('#getCourseID').click(function(){
            var check = $('.check');
            for (var i = 0; i < check.length; i++){
                if (check[i].checked === true){
                    $.post(
                        '<?=base_url() ?>lesson/addIntoCourse',
                        {
                            idLesson :id,
                            idCourse :check[i].value
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
                    );
                }
            }
        });
    }
    
</script>
