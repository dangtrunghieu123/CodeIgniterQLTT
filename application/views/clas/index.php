<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Class Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('clas/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ClassID</th>
						<th>CourseID</th>
						<th>TeacherID</th>
						<th>Times</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($class as $c){ ?>
                    <tr>
						<td><?php echo $c['classID']; ?></td>
						<td><?php echo $c['courseID']; ?></td>
						<td><?php echo $c['teacherID']; ?></td>
						<td><?php echo $c['times']; ?></td>
						<td>
                            <a href="<?php echo site_url('clas/edit/'.$c['classID']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('clas/remove/'.$c['classID']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
