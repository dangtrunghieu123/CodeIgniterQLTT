

<section class="content">
	<div class="container-fluid">
		<div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="card">
					<div class="header">
                        <a href="<?=base_url()?>clas/add" class="btn btn-primary btn-raised pull-right waves-effect m-t--10"  data-toggle="tooltip" data-original-title="Thêm lớp học">
							<i class="material-icons">add</i> 
						</a>
						<h2>Danh sách lớp học</h2>
					</div>
					<div class="body">
						<div class="table-responsive">
							<table class="table table-bordered table-striped table-hover dataTable js-basic-example">
								<thead>
                                <tr>
                                    <th>khóa học</th>
                                    <th>Giảng viên</th>
                                    <th>Thời gian</th>
                                    <th>Thao tác</th>
                                </tr>
								</thead>
								<tbody>
                                <?php foreach($class as $c){ ?>
                                    <tr>
                                        <td><?php echo $c['nameCourse']; ?></td>
                                        <td><?php echo $c['teacherID']; ?></td>
                                        <td><?php echo $c['times']; ?></td>
                                        <td>
                                           
                                            <a href="<?php echo site_url('clas/edit/'.$c['classID']); ?>" data-toggle="tooltip" data-original-title="Sửa lớp học" class="btn btn-warning btn-xs"><i class='material-icons'>edit</i></a> 
                                            <a onclick="onDelete('<?=$c['classID']?>','<?=$c['times']?>')" class="btn btn-danger btn-xs"
                                                data-toggle="tooltip" data-original-title="Xóa">
                                                <i class="material-icons">delete</i>
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



<script>
	 function onDelete(id,times){
        var self = this;
        if(id){
            swal({
                title: "Xóa khóa học " + times,
                text: "Bạn chắc chắn muốn xóa lớp học này",
                type: "info",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Có",
                cancelButtonText: "Không",
                closeOnConfirm: false,
                showLoaderOnConfirm: true
            }, function() {
                $.post(
                    '<?=base_url()?>clas/remove',
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


