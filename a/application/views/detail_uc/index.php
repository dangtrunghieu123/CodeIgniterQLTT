<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Detail Uc Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('detail_uc/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>UserClassID</th>
						<th>CourseID</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($detail_uc as $d){ ?>
                    <tr>
						<td><?php echo $d['userClassID']; ?></td>
						<td><?php echo $d['courseID']; ?></td>
						<td>
                            <a href="<?php echo site_url('detail_uc/edit/'.$d['']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('detail_uc/remove/'.$d['']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
