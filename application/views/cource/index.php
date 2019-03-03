<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Cource Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('cource/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Course</th>
						<th>NameCourse</th>
						<th>View</th>
						<th>Author</th>
						<th>Description</th>
						<th>Images</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($cource as $c){ ?>
                    <tr>
						<td><?php echo $c['course']; ?></td>
						<td><?php echo $c['nameCourse']; ?></td>
						<td><?php echo $c['view']; ?></td>
						<td><?php echo $c['author']; ?></td>
						<td><?php echo $c['description']; ?></td>
						<td><?php echo $c['images']; ?></td>
						<td>
                            <a href="<?php echo site_url('cource/edit/'.$c['course']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('cource/remove/'.$c['course']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
