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
                        <a href="<?=base_url()?>student" class="btn btn-primary btn-raised pull-right waves-effect m-t--10"  data-toggle="tooltip" data-original-title="Thêm khóa học">
							<i class="material-icons">keyboard_backspace</i> 
						</a>
						<h2>Danh sách bài học khóa <?=$name['nameCourse'] ?></h2>
					</div>
					<div class="body">
						<div class="table-responsive">
							<table class="table table-bordered table-striped table-hover dataTable js-basic-example">
								<thead>
                                    <tr>
                                        
                                        <th>Danh sách bài học</th>
                                    </tr>
								</thead>
								<tbody>
                                    <?php foreach($lesson as $l){ ?>
                                        <tr>
                                            
                                            <td>
                                                <a href="<?php echo site_url('student/D_lesson/'.$l['lessonID']); ?>" >
                                                    <?php echo $l['nameLesson']; ?>
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






