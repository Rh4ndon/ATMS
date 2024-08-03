<?php
 
$conn = "";
  
try {
    $servername = "localhost";
    $dbname = "u187430566_atms";
    $username = "u187430566_rhand0n";
    $password = "Rhandon_0312";
  
    $conn = new PDO(
        "mysql:host=$servername; dbname=u187430566_atms",
        $username, $password
    );
     
   $conn->setAttribute(PDO::ATTR_ERRMODE,
                    PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
 
?>