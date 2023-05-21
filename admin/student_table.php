	<?php include('dbcon.php'); ?>
	<form action="delete_student.php" method="post">
	<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
	<a data-toggle="modal" href="#student_delete" id="delete"  class="btn btn-danger" name=""><i class="icon-trash icon-large"></i></a>
	<div class="pull-right">
			    <ul class="nav nav-pills">
				<li class="active">
					<a href="students.php">All</a>
				</li>
				
				</ul>
	</div>
	<?php include('modal_delete.php'); ?>
		<thead>
		<tr>
					<th></th>

					<th>Profile</th>				
					<th>ID Number</th>
					<th>Gender</th>
					<th>Course Yr & Section</th>
					<th></th>
		</tr>
		</thead>
		<tbody>
			
		<?php
	$query = mysqli_query($conn,"select * from student LEFT JOIN class ON student.class_id = class.class_id ORDER BY student.student_id DESC") or die(mysqli_error());
	while ($row = mysqli_fetch_array($query)) {
		$id = $row['student_id'];
		?>
	
		<tr>
		<td width="30">
		<input id="optionsCheckbox" class="uniform" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
		</td>
		<td><img id="avatar" class="img-polaroid" src="<?php echo $row['location']; ?>"><br>
		<?php echo $row['firstname'] . " " . $row['lastname']; ?>		
		</td>
		<td><?php echo $row['username']; ?></td> 
		<td><?php echo $row['gender']; ?></td> 
		<td width="100"><?php echo $row['class_name']; ?></td> 
	
		<td width="30"><a href="edit_student.php<?php echo '?id='.$id; ?>" class="btn btn-success"><i class="icon-pencil"></i> </a><br>
		
	    </td>
		
	
		</tr>
	<?php } ?>    
	
		</tbody>
	</table>

	</form>
