<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Lesson Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('lesson/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>LessonID</th>
						<th>NameLesson</th>
						<th>View</th>
						<th>Account</th>
						<th>Image</th>
						<th>Content</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($lesson as $l){ ?>
                    <tr>
						<td><?php echo $l['lessonID']; ?></td>
						<td><?php echo $l['nameLesson']; ?></td>
						<td><?php echo $l['view']; ?></td>
						<td><?php echo $l['account']; ?></td>
						<td><?php echo $l['image']; ?></td>
						<td><?php echo $l['content']; ?></td>
						<td>
                            <a href="<?php echo site_url('lesson/edit/'.$l['lessonID']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('lesson/remove/'.$l['lessonID']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
