


<section class="content">
	<div class="container-fluid">
		<div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="card">
					<div class="header">
						<h2>QUẢN LÝ HỌC VIÊN</h2>
					</div>
					<div class="body">

                        <form id="form_validation" action="<?=base_url()?>user_clas/index" method="POST">
								<div class="row">
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
										<div class="form-group form-float">
										<label for="">Chọn khóa học</label>
											<select onchange="btnClick(this)" class="form-control show-tick" data-live-search="true"  name="courceID">
												<option value="" selected disabled style="display:none;">Chọn khóa học</option>  
												<?php foreach($_course as $key => $c){?>
													<option value="<?= $c['courseID']?>" > <?= $c['nameCourse']?></option>
												<?php }?>
											</select>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
										<div class="form-group form-float">
										<label for="">Chọn lớp học</label>
											<select  onchange="lophoc(this)"  class="form-control show-tick" data-live-search="true" id="classID" name="classID">
												<option value="" selected disabled style="display:none;">Chọn lớp học</option>  
												
											</select>
										</div>
									</div>
								</div>
						   </form>

						<div class="table-responsive" id="test">
							<table id="exportables" class="table table-bordered table-striped table-hover dataTable js-basic-example" >
								<thead>
									<tr>
										<th>#</th>
										<th>Họ tên</th>
										<th>email</th>
										<th>SĐT</th>
										<th>Tình trạng</th>
										<th>Thao tác</th>
									</tr>	
								</thead>
							
								<!-- <tbody id="semesterId">
									
										
							
									
								</tbody> -->
							</table>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<script>

	function btnClick(self){
		var id = self.value;
		if(id){
			$.post(
				"<?= base_url()?>admin/fetch_by_courseID",
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

	
	function lophoc(self){
		var id = self.value;
		if(id){
				data = { id: id };
				refesh_datatable("<?= base_url('admin/student_by_classID') ?>",data);
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
						{ data: "name" },
						{ data: "email" },
						{ data: "phone" },
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