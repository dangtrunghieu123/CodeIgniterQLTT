<style>
    
</style>
<section class="content">
	<div class="container-fluid">
		<div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="card">
					<div class="header">
                        <a href="<?=base_url()?>cource/listLesson/<?=$_courseID ?>" class="btn btn-primary btn-raised pull-right waves-effect m-t--10"  data-toggle="tooltip" data-original-title="Quay lại">
							<i class="material-icons">keyboard_backspace</i> 
						</a>
						<h2> <?=$lesson['nameLesson'] ?></h2>
					</div>
					<div class="body">
						<div>
                        <?=$lesson['content'] ?>
                        </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>






