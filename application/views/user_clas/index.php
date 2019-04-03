


<section class="content">
	<div class="container-fluid">
		<div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="card">
					<div class="header">
						<a href="#" class="btn btn-primary btn-raised pull-right waves-effect m-t--10"  data-toggle="tooltip" data-original-title="Thêm khóa học">
							<i class="material-icons">add</i> 
						</a>
						<h2>QUẢN LÝ KHÓA HỌC</h2>
					</div>
					<div class="body">

                        <form id="form_validation" action="<?=base_url()?>semester/index" method="POST">
								<div class="row">
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
										<div class="form-group form-float">
										<label for="">Chọn khóa học</label>
											<select onchange="btnClick(this)" class="form-control show-tick" data-live-search="true" id="#schoolYearId" name="courceID">
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
											<select  class="form-control show-tick" data-live-search="true" id="classID" name="classID">
												<option value="" selected disabled style="display:none;">Chọn lớp học</option>  
												
											</select>
										</div>
									</div>
								</div>
						   </form>

						<div class="table-responsive" id="test">
							<table id="exportables" class="table table-bordered table-striped table-hover dataTable js-exportable" id="exportables">
								<thead>
									<tr>
										<th>#</th>
										<th>Học kì</th>
										<th>Mô tả</th>
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