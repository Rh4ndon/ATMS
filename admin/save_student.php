<?php
include('dbcon.php');
        
               $un = $_POST['un'];
               $fn = $_POST['fn'];
               $ln = $_POST['ln'];
               $gen = $_POST['gen'];
               $pr = $_POST['pr'];
               $pn = $_POST['pn']; 
               $class_id = $_POST['class_id'];               


               mysqli_query($conn,"insert into student (username,firstname,lastname,gender,location,class_id,status,parent,parent_no)
		values ('$un','$fn','$ln','$gen','uploads/NO-IMAGE-AVAILABLE.jpg','$class_id','Registered', '$pn', '$pr')                                    
		") or die(mysqli_error()); ?>



<?php    ?>