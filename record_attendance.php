<?php
//Start session
session_start();

$temp_rec = $_SESSION['temperature'];
$us = $_SESSION['user'];
$fi = $_SESSION['first'];
$la = $_SESSION['last'];
$gend = $_SESSION['gend'];
$cname = $_SESSION['cname'];
$cp = $_SESSION['cp'];
$par = $_SESSION['par'];
										

?>
<form method="POST">
										<div class="col mb-3">
											<input type="text" name="search" class="form-control" required placeholder="Input ID Number To Record">
											</div>
											<input type="hidden" name="temp" value="<?php echo $temp_rec; ?>" required>
										                        
										    <input type="hidden" name="user" value="<?php echo $us; ?>" required>
										
										  <input type="hidden" name="first" value="<?php echo $fi; ?>" required>
										  <input type="hidden" name="last" value="<?php echo $la; ?>" required>
										  <input type="hidden" name="gen" value="<?php echo $gend; ?>" required>
										  <input type="hidden" name="section" value="<?php echo $cname; ?>" required>
										  
										  <!--For txt Message
									
										  <input type="hidden" name="mobile" value=">" required>
										  <input type="hidden" name="message" value="Goo day ___, 
										  ____ taps his/her card at main gate! " required>
										 For txt Message -->

										
 

						<?php
						// Set the new timezone
						date_default_timezone_set('Asia/Manila');
						$date = date('m-d-y');
						$tme = date('H:i:s');						
						?>
						<input type="hidden" name="date" value="<?php echo $date;?>">
						<input type="hidden" name="htme" value="<?php echo $tme;?>">
					
											<center><input type="submit" value="Record" name="submit" class="btn btn-primary"></center>
                       					 
										</form>
										
										
  
					



	<?php
	@include 'admin/dbcon.php';

	 if(isset($_POST['submit'])){

        
		$user = mysqli_real_escape_string($conn, $_POST['user']);
		$first = mysqli_real_escape_string($conn, $_POST['first']);
		$last = mysqli_real_escape_string($conn, $_POST['last']);
		$gen = mysqli_real_escape_string($conn, $_POST['gen']);
		$temp = mysqli_real_escape_string($conn, $_POST['temp']);
		$section = mysqli_real_escape_string($conn, $_POST['section']);
		$date = mysqli_real_escape_string($conn, $_POST['date']);
		$htme = mysqli_real_escape_string($conn, $_POST['htme']);

		
        $select = " SELECT * FROM attendance WHERE username = '$user' && htme = '$htme' && date = '$date'";

        $result = mysqli_query($conn, $select);
	

        if(mysqli_num_rows($result) > 0){
        	$error[] = 'Your attendance is already recorded';
        }else {
        	$insert = "INSERT INTO attendance(username,firstname,lastname,gender,temp,section,date,htme) VALUES ('$user','$first','$last','$gen','$temp','$section','$date','$htme')";
			
        	mysqli_query($conn, $insert);
			echo "<script type='text/javascript'>alert('ATTENDANCE WAS RECORDED!!!');
			window.location='index.php';
			</script>";
            

			//For txt message
			$mobile=$_POST['mobile'];
			$message=$_POST['message'];
	
			$apiKey = urlencode('API KEY');
			$numbers = array($mobile);
			$sender = urlencode('TXTLCL');
			$message = rawurlencode($message);
			$numbers = implode(',', $numbers);
 			$data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
 			$ch = curl_init('https://api.textlocal.in/send/');
			curl_setopt($ch, CURLOPT_POST, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			$response = curl_exec($ch);
			curl_close($ch);
			echo $response;
			//For txt message
			
        }
	 };
?>