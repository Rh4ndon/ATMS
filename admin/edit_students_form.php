   <div class="row-fluid">
       <a href="students.php" class="btn btn-info"><i class="icon-plus-sign icon-large"></i> Add Student</a>
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Add Student</div>
                            </div>
                            <div class="block-content collapse in">
							<?php
							$query = mysqli_query($conn,"select * from student LEFT JOIN class ON class.class_id = student.class_id where student_id = '$get_id'")or die(mysqli_error());
							$row = mysqli_fetch_array($query);
							?>
              
                                <div class="span12">
								<form method="post">
								
								        <div class="control-group">
                                   
                                          <div class="controls">
                                            <select  name="cys" class="" required>
                                             	<option value="<?php echo $row['class_id']; ?>"><?php echo $row['class_name']; ?></option>
											<?php
											$cys_query = mysqli_query($conn,"select * from class order by class_name");
											while($cys_row = mysqli_fetch_array($cys_query)){
											
											?>
											<option value="<?php echo $cys_row['class_id']; ?>"><?php echo $cys_row['class_name']; ?></option>
											<?php } ?>
                                            </select>
                                          </div>
                                        </div>

                                        <div class="control-group">
                                   
                                          <div class="controls">
                                            <select  name="gen" class="" required>
                                             	<option><?php echo $row['gender']; ?></option>
                                               <option>Male</option>
                                               <option>Female</option>
											
                                            </select>
                                          </div>
                                        </div>

								
										<div class="control-group">
                                          <div class="controls">
                                            <input name="un" value="<?php echo $row['username']; ?>" class="input focused" id="focusedInput" type="text" placeholder = "ID Number" required>
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
                                            <input name="fn"  value="<?php echo $row['firstname']; ?>"  class="input focused" id="focusedInput" type="text" placeholder = "Firstname" required>
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
                                            <input  name="ln"  value="<?php echo $row['lastname']; ?>" class="input focused" id="focusedInput" type="text" placeholder = "Lastname" required>
                                          </div>
                                        </div>

                    <div class="control-group">
                                          <div class="controls">
                                            <input  name="pr"  value="<?php echo $row['parent']; ?>" class="input focused" id="focusedInput" type="text" placeholder = "Parent/Guardian Fullname" required>
                                          </div>
                                        </div>

                    <div class="control-group">
                                          <div class="controls">
                                            <input  name="pn"  value="<?php echo $row['parent_no']; ?>" class="input focused" id="focusedInput" type="text" placeholder = "Parent Cp# format +639123456780" required>
                                          </div>
                                        </div>
								
										
											<div class="control-group">
                                          <div class="controls">
												<button name="update" class="btn btn-success"><i class="icon-save icon-large"></i></button>
                        <a tabindex="-1" href="#myModal_student" data-toggle="modal"><i class="icon-picture"></i> Avatar</a>

                                          </div>
                                        </div>
                                </form>
								</div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
					
					
		
	      <?php
                            if (isset($_POST['update'])) {
                               
                                $un = $_POST['un'];
                                $fn = $_POST['fn'];
                                $ln = $_POST['ln'];
                                $gen = $_POST['gen'];
                                $cys = $_POST['cys'];
                                $pr = $_POST['pr'];
                                $pn = $_POST['pn'];
                      

								mysqli_query($conn,"update student set username = '$un' , gender = '$gen' , firstname ='$fn' , lastname = '$ln' , class_id = '$cys' , parent = '$pr' , parent_no = '$pn' where student_id = '$get_id' ")or die(mysqli_error());

								?>
 
								<script>
								window.location = "students.php"; 
								</script>

                       <?php     }  ?>


        
	<?php include('avatar_modal_student.php'); ?>
	