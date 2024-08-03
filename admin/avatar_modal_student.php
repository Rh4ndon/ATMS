		<!-- Modal -->
<div id="myModal_student" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
		<h3 id="myModalLabel">Change Avatar</h3>
	</div>
		<div class="modal-body">
					<form method="post" action="" enctype="multipart/form-data">
							<center>	
								<div class="control-group">
								<div class="controls">
									<input name="image" class="input-file uniform_on" id="fileInput" type="file" required>
								</div>
								</div>
							</center>			
					
		</div>
	<div class="modal-footer">
		<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i> Close</button>
		<button class="btn btn-info" name="change"><i class="icon-save icon-large"></i> Save</button>
	</div>
					</form>
</div>


<?php
 include('dbcon.php');
 
 
 
                            if (isset($_POST['change'])) {
                               

                                $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
                                $image_name = addslashes($_FILES['image']['name']);
                                $image_size = getimagesize($_FILES['image']['tmp_name']);

                                move_uploaded_file($_FILES["image"]["tmp_name"], "./uploads/" . $_FILES["image"]["name"]);
                                $location = "uploads/" . $_FILES["image"]["name"];
								
								mysqli_query($conn,"update student set location = '$location' where student_id  = '$get_id' ")or die(mysqli_error());
								
								?>
 
								<script>
								window.location = "edit_student.php<?php echo '?id='.$id; ?>";  
								</script>

                       <?php     }  ?>