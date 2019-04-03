<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Course Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('course/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>CourseID</th>
						<th>NameCourse</th>
						<th>AmountReg</th>
						<th>Price</th>
						<th>UserID</th>
						<th>Image</th>
						<th>Desription</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($course as $c){ ?>
                    <tr>
						<td><?php echo $c['courseID']; ?></td>
						<td><?php echo $c['nameCourse']; ?></td>
						<td><?php echo $c['amountReg']; ?></td>
						<td><?php echo $c['price']; ?></td>
						<td><?php echo $c['userID']; ?></td>
						<td><?php echo $c['image']; ?></td>
						<td><?php echo $c['desription']; ?></td>
						<td>
                            <a href="<?php echo site_url('course/edit/'.$c['courseID']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('course/remove/'.$c['courseID']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
