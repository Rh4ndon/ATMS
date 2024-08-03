


<?php
	

	 if(isset($_POST['submit'])){
		session_start();

        
		$_SESSION['temperature'] = $_POST['temp'];
		
		echo "<script> location.href='check_student.php'; </script>";
	 };
?>




				
				
				
				<div class="text-center">

					<h1 style="color:red; font-size:90px;"><?php echo date('F d,Y') ?><br><img src="assets/img/logo.png" height="100" width="100">       <span id="now"></span></h1>
				</div>
				<div class="col-md-12">

				<form action="" method="post" id="myForm" name="myform">
    					<center>
						<?php
                            if(isset($error)){
                                foreach($error as $error){
                                    echo '<span class="text-warning">'.$error.'</span>';
                                }
                            }
                        ?></center>
						<div class="form-group"><br>
						<div class="col mb-3">
								<input type="number" id="quantity" step="0.01" name="temp" max="37.2" min ="34.0" class="form-control col-sm-12" placeholder="Temperature" required>
						</div>

						<div class="col mb-3"><center>
                            <input type="submit" value="Ok" name="submit" class="btn btn-primary"></center>
                        </div>
						
					


					
										
										
				</form>

				</div>
	
		<script>
		$(document).ready(function(){
			setInterval(function(){
				var time = new Date();
				var now = time.toLocaleString('en-US', { hour: 'numeric', minute: 'numeric', second: 'numeric', hour12: true })
				$('#now').html(now)
			},500)
			console.log()			
		})


		
	</script>
	
