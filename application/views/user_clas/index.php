<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">User Class Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('user_clas/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>UserClassID</th>
						<th>Time</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($user_class as $u){ ?>
                    <tr>
						<td><?php echo $u['userClassID']; ?></td>
						<td><?php echo $u['time']; ?></td>
						<td>
                            <a href="<?php echo site_url('user_clas/edit/'.$u['userClassID']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('user_clas/remove/'.$u['userClassID']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
