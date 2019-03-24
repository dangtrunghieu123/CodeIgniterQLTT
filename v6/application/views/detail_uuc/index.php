<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Detail Uuc Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('detail_uuc/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Account</th>
						<th>UserClassID</th>
						<th>Status</th>
						<th>Certificate</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($detail_uuc as $d){ ?>
                    <tr>
						<td><?php echo $d['account']; ?></td>
						<td><?php echo $d['userClassID']; ?></td>
						<td><?php echo $d['status']; ?></td>
						<td><?php echo $d['certificate']; ?></td>
						<td>
                            <a href="<?php echo site_url('detail_uuc/edit/'.$d['']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('detail_uuc/remove/'.$d['']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
