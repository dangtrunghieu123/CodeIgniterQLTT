


<section class="content">
	<div class="container-fluid">
		<div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="card">
					<div class="header">
					<a href="<?=base_url()?>user_clas/index" class="btn btn-primary btn-raised pull-right waves-effect m-t--10"  data-toggle="tooltip" data-original-title="Quay lại">
							<i class="material-icons">keyboard_backspace</i> 
						</a>
						<h2>Thêm học viên vào lớp học</h2>
					</div>
					<div class="body">
					<!-- <form id="form_validation" action="<?=base_url()?>user_clas/index" method="POST"> -->
                        <form id="form_validation" action=""  method="POST" onsubmit="return false">
								<div class="row">
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
										<div class="form-group form-float">
										<label for="">Chọn khóa học</label>
											<select onchange="btnClick(this)" class="form-control show-tick" data-live-search="true"  name="courceID">
												<option value="" selected disabled style="display:none;">Chọn khóa học</option>  
												<?php foreach($course as $key => $c){?>
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
								<div class="table-responsive" id="test">
							<table id="exportables" class="table table-bordered table-striped table-hover dataTable js-basic-example" >
								<thead>
									<tr>
										<th>#</th>
										<th>Tài khoản</th>
										<th>Họ tên</th>
										<th>email</th>
										<th>SĐT</th>
										<th>Chọn HV</th>
									</tr>	
								</thead>
							
								<tbody>
									<?php foreach($student as $key=>$u){ ?>
										
										<tr>
											<td><?= $key+1 ?></td>
											<td><?php echo $u['account']; ?></td>
											<td><?php echo $u['name']; ?></td>
											<td><?php echo $u['email']; ?></td>
											<td><?php echo $u['phone']; ?></td>
											<td>
											
												<input type="checkbox" class="account" id="<?= $key+1 ?>" name="account" value="<?=$u['account']?>" class="filled-in chk-col-green" />
												<label for="<?= $key+1 ?>"></label>
												
											</td>
										</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
						<button class="btn btn-primary waves-effect btn-block" style="margin-top:20px" onclick="addStudent()" type="submit">LƯU</button>
					</form>

						
						
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
				"<?= base_url()?>user_clas/fetch_by_courseID",
				{
					id:id,
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
		
	}

</script>

<script>
	function addStudent(){
		var classID = $('#classID').val();
		var studentID = $(".account");
		console.log(classID);
		for (var i = 0; i < studentID.length; i++){
			console.log(studentID.length)
			if (studentID[i].checked === true){
				console.log(studentID[i].value);
				$.post(
					'<?=base_url() ?>user_clas/add',
					{
						classID :classID,
						studentID :studentID[i].value
					},
					function(result){
						console.log(result);
						swal({
							title: 'THÔNG BÁO',
							type: result.isSuccess == true ? 'success' : 'error',
							text: result.message
						}, function() {
							if(result.isSuccess == false){
								window.location.href = "<?=base_url()?>user_clas";
							}
							else{
								window.location.reload();
							}
						
						});
					}
				);
			}
		}
	}
</script>

