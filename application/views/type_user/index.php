<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Type User Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('type_user/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>UserTypeID</th>
						<th>NameTypeUser</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($type_user as $t){ ?>
                    <tr>
						<td><?php echo $t['userTypeID']; ?></td>
						<td><?php echo $t['nameTypeUser']; ?></td>
						<td>
                            <a href="<?php echo site_url('type_user/edit/'.$t['userTypeID']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('type_user/remove/'.$t['userTypeID']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
