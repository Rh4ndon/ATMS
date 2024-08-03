<?php

    include 'dbcon.php';

    $user_id = $_GET['id'];

    $delete_attendance = " DELETE FROM `attendance` WHERE id = $user_id ";

    mysqli_query($conn, $delete_attendance);

    header ('Location: Javascript:window.history.go();');
    
   


    
?>
