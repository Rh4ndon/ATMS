<?php
//Start session
session_start();

$temp_rec = $_SESSION['temperature'];
?>

<?php
											if (isset($_POST['sub'])){
												include('admin/dbcon.php');
												$get_id= ($_POST['search']);
												
												//MySQLi Object-oriented
												$oquery=$conn->query("select * from student LEFT JOIN class ON student.class_id = class.class_id where username = '$get_id'");
												while($orow = $oquery->fetch_array()){
										?>                          
										<center><h4 style="color:green;">Redirecting in 5 sec...</h4></center>
										<div class="cardprof">
  										<img src="admin/<?php echo $orow['location']; ?>" alt="Student" style="width:100%">
  										<h4><?php echo $orow['firstname'] . " " . $orow['lastname']; ?></h4>
  										<p class="titleprof">ID No. <?php echo $orow['username']; ?></p>
  										<p class="titleprof">Gender: <?php echo $orow['gender']; ?></p>
  										<p class="titleprof">Section: <?php echo $orow['class_name']; ?></p>
		
										</div>
										<?php echo "<script>setTimeout(function(){
								window.location = 'record.php';
							  }, 5000);</script>";?>
										
								<?php 
							}
							
						}
					?>



					<div> <br><br>

										<form method="POST">
										<div class="col mb-3">
										<input style="text-align:center;"type="text" name="" class="form-control" disabled value="Temperature is <?php echo $temp_rec;?>">	
                        				<br>
										<input type="text" name="search" class="form-control" required placeholder="Input ID Number To Check Details">			
                        				</div>

                        				<div class="col mb-3">
                            				<center><input type="submit" value="Check Details" name="sub" class="btn btn-primary"></center>
											
                       					 </div>
										</form>


										<?php
											if (isset($_POST['sub'])){
												include('admin/dbcon.php');
												$get_id= ($_POST['search']);
												
												//MySQLi Object-oriented
												$oquery=$conn->query("select * from student LEFT JOIN class ON student.class_id = class.class_id where username = '$get_id'");
												while($orow = $oquery->fetch_array()){
										?>                          
											<?php  $_SESSION['user'] = $orow['username']; ?>
											<?php  $_SESSION['first'] = $orow['firstname']; ?>
											<?php  $_SESSION['last'] = $orow['lastname']; ?>
											<?php  $_SESSION['gend'] = $orow['gender']; ?>
											<?php  $_SESSION['cname'] = $orow['class_name']; ?>
										
										  
										  
										  <!--For txt Message -->

										  <?php  $_SESSION['cp'] = $orow['parent_no']; ?>
										  
										  <?php $_SESSION['par'] = $orow['parent']; ?>
									
										 <!--For txt Message -->

										
 
										
								<?php 
							}
						}
					?>
