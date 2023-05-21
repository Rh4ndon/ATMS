			<nav class = "navbar navbar-header navbar-dark bg-dark">
			<div class = "container-fluid">
				<div class = "navbar-header">
					<p class = "navbar-text pull-right">Attendance Management System</p>
					<img src="admin/img/logo.png" height="50" width="50">
				</div>
				<div class = "nav navbar-nav navbar-right">
					<a href="admin/index.php" class="text-light">ADMIN   <i class="fa fa-power-off"></i></a>
				</div>
			</div>
		</nav>
		
		<script>
			$(document).ready(function(){
				var loc = window.location.href;
				loc.split('{/}')
				$('#sidebar a').each(function(){
				// console.log(loc.substr(loc.lastIndexOf("/") + 1),$(this).attr('href'))
					if($(this).attr('href') == loc.substr(loc.lastIndexOf("/") + 1)){
						$(this).addClass('active')
					}
				})
			})
			
		</script>