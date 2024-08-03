
<?php include('header.php'); ?>




    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('record_sidebar.php'); ?>
                <div class="span9" id="">
                     <div class="row-fluid">
					 
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Attendance List</div>
								<div class="muted pull-right">						
								<a id="print" onclick="window.print()"  class="btn btn-primary"><i class="icon-print"></i> Print Attendance List</a>
							</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
						
								
								
									<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
							
										<thead>
                    <?php
											if (isset($_POST['submit'])){
												include('dbcon.php');
												$from=date('m-d-y',strtotime($_POST['from']));
                        						$section=($_POST['section']);                         
										?>                         
                  <caption><div class="pull-left"><?php echo $section?></div><div class="pull-right"><?php echo $from?></div></caption>        
						        <?php
							        }
						?>
										    <tr>
												<td>Name</td>
												<td>Gender</td>
												<td>AM in</td>
                        <td>AM out</td>
                        <td>PM in</td>
                        <td>PM out</td>
                        
                        
												</tr>
												
										</thead>
										<tbody>
                 
										<?php
											if (isset($_POST['submit'])){
												include('dbcon.php');
												$from=date('m-d-y',strtotime($_POST['from']));
                        						$section=($_POST['section']);
												//$to=date('m-d-y',strtotime($_POST['to']));
												//MySQLi Procedural
												//$oquery=mysqli_query($conn,"select * from `login` where login_date between '$from' and '$to'");
												//while($orow=mysqli_fetch_array($oquery)){
												/*	?>
												<tr>
													<td><?php echo $orow['logid']?></td>
													<td><?php echo $orow['username']?></td>
													<td><?php echo $orow['login_date']?></td>
													</tr>
												<?php */
												//}
				
												//MySQLi Object-oriented
												$oquery=$conn->query("select distinct username, lastname, firstname, gender, section, date from `attendance` where date = '$from' and section = '$section' order by htme");
												while($orow = $oquery->fetch_array()){
                          
										?>                         
						
     
            <tr>
								
								<td><?php echo $orow['lastname']; ?>, <?php echo $orow['firstname']; ?></td>
								<td><?php echo $orow['gender']; ?></td>
               
                <?php
											if (isset($_POST['submit'])){
												include('dbcon.php');
												$from=date('m-d-y',strtotime($_POST['from']));
                        $section=($_POST['section']);
                        $user = $orow['username'];
												
												$ooquery=$conn->query("select * from `attendance` where date = '$from' and section = '$section' and username = '$user' order by htme ");
												while($oorow = $ooquery->fetch_array()){
                          
										?>                         
						
                <td><?php echo $oorow['htme']; ?>
					<a href="deleteattendance.php?id=<?php echo $oorow['id']; ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-x" viewBox="0 0 16 16">
                    <path d="M6.146 6.146a.5.5 0 0 1 .708 0L8 7.293l1.146-1.147a.5.5 0 1 1 .708.708L8.707 8l1.147 1.146a.5.5 0 0 1-.708.708L8 8.707 6.854 9.854a.5.5 0 0 1-.708-.708L7.293 8 6.146 6.854a.5.5 0 0 1 0-.708z"/>
                    <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z"/>
                    </svg>
                  </a>  
                </td> 

                
                          

								
						
						        <?php
							        }
                    }
						?>
               
                



                </tr>  
						
						        <?php
							        }
                    }
						?>

             

     
          
    
                         
										</tbody>
									</table>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                        
							
                        
                    </div>


                </div>
            </div>
		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>




    </body>


</html>