<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Users Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('user/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Account</th>
						<th>Name</th>
						<th>Pass</th>
						<th>Email</th>
						<th>Phone</th>
						<th>Gender</th>
						<th>Address</th>
						<th>Birthday</th>
						<th>UserTypeID</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($users as $u){ ?>
                    <tr>
						<td><?php echo $u['account']; ?></td>
						<td><?php echo $u['name']; ?></td>
						<td><?php echo $u['pass']; ?></td>
						<td><?php echo $u['email']; ?></td>
						<td><?php echo $u['phone']; ?></td>
						<td><?php echo $u['gender']; ?></td>
						<td><?php echo $u['address']; ?></td>
						<td><?php echo $u['birthday']; ?></td>
						<td><?php echo $u['userTypeID']; ?></td>
						<td>
                            <a href="<?php echo site_url('user/edit/'.$u['account']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('user/remove/'.$u['account']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
