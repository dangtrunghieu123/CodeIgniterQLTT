<style>
    .img{
        width:150px;
        height:150px;

    }
    .img img{
        width:100%;
        height:100%;
    }
</style>
<section class="content">
	<div class="container-fluid">
		<div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="card">
					<div class="header">
						<a href="<?=base_url()?>cource/add" class="btn btn-primary btn-raised pull-right waves-effect m-t--10"  data-toggle="tooltip" data-original-title="Thêm khóa học">
							<i class="material-icons">add</i> 
						</a>
						<h2>QUẢN LÝ KHÓA HỌC</h2>
					</div>
					<div class="body">
						<div class="table-responsive">
							<table class="table table-bordered table-striped table-hover dataTable js-basic-example">
								<thead>
                                    <tr>
                                        
                                        <th>Tên khóa học</th>
                                        <th>Gía</th>
                                        <th>Người tạo</th>
                                        <th>Mô tả</th>
                                        <th>hình ảnh</th>
                                        <th>Thao tác</th>
                                    </tr>
								</thead>
								<tbody>
                                    <?php foreach($cource as $c){ ?>
                                        <tr>
                                            
                                            <td><?php echo $c['nameCourse']; ?></td>
                                            <td><?php echo $c['price']; ?></td>
                                            <td><?php echo $c['author']; ?></td>
                                            <td><?php echo $c['description']; ?></td>
                                            <td class="img">
                                                <img src="<?php echo $c['image']; ?>" alt="">
                                            </td>
                                            <td>
                                                <a href="<?php echo site_url('cource/edit/'.$c['courseID']); ?>" data-toggle="tooltip" data-original-title="Sửa khóa học" class="btn btn-warning btn-xs"><i class='material-icons'>edit</i></a> 
												<a onclick="onDelete('<?=$c['courseID']?>','<?=$c['nameCourse']?>')" class="btn btn-danger btn-xs"
												 data-toggle="tooltip" data-original-title="Xóa">
													<i class="material-icons">delete</i>
												</a>
                                                <a  href="<?php echo site_url('cource/viewLess/'.$c['courseID']); ?>"  data-toggle="tooltip" data-original-title="Xem bài học" class="btn btn-success btn-xs"><i class='material-icons'>search</i></a> 
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
	 function onDelete(id,name){
        var self = this;
        if(id){
            swal({
                title: "Xóa khóa học " + name,
                text: "Bạn chắc chắn muốn xóa khóa học này?",
                type: "info",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Có",
                cancelButtonText: "Không",
                closeOnConfirm: false,
                showLoaderOnConfirm: true
            }, function() {
                $.post(
                    '<?=base_url()?>cource/remove',
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

<!-- <script>
    function onViewLesson(id){
        var self = this;
        if(id){
            $.post(
                '<?=base_url()?>Detail_lc',
                {id:id},
                function(result){
                    console.log(result);
                }
            );
        }
    }
</script> -->
