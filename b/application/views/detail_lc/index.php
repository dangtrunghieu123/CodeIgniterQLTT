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
                        <a href="<?=base_url()?>cource/index" class="btn btn-primary btn-raised pull-right waves-effect m-t--10"  data-toggle="tooltip" data-original-title="Thêm khóa học">
							<i class="material-icons">keyboard_backspace</i> 
						</a>
						<h2>Danh sách bài học khóa <?=$name['nameCourse'] ?></h2>
					</div>
					<div class="body">
						<div class="table-responsive">
							<table class="table table-bordered table-striped table-hover dataTable js-basic-example">
								<thead>
                                    <tr>
                                        
                                        <th>Tên bài học</th>
                                        <th>Nội dung</th>
                                        <th>Người tạo</th>
                                        <th>Thao tác</th>
                                    </tr>
								</thead>
								<tbody>
                                    <?php foreach($lesson as $l){ ?>
                                        <tr>
                                            
                                            <td><?php echo $l['nameLesson']; ?></td>
                                            <td><?php echo $l['content']; ?></td>
                                            <td><?php echo $l['author']; ?></td>
                                            <td>

												<a onclick="onDelete('<?=$l['id']?>','<?=$l['nameLesson']?>')" class="btn btn-danger btn-xs"
												 data-toggle="tooltip" data-original-title="Xóa">
													<i class="material-icons">clear</i>
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
	 function onDelete(id,name){
        var self = this;
        if(id){
            swal({
                title: "Xóa khóa học " + name,
                text: "Bạn chắc chắn muốn xóa bài học này khỏi khóa học?",
                type: "info",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Có",
                cancelButtonText: "Không",
                closeOnConfirm: false,
                showLoaderOnConfirm: true
            }, function() {
                $.post(
                    '<?=base_url()?>cource/removeLesson',
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


