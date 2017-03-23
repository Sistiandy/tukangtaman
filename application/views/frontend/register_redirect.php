<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!--  Custom Style -->
	<link href="<?php echo media_url() ?>/css/styles.css" rel="stylesheet" />
	<!--  Jquery Core Script -->
	<script src="<?php echo media_url() ?>/js/scripts.js"></script>
</head>
<body>
	<div class="col-md-8 col-md-offset-4">
		<div class="callout callout-info">
			<center>
				<h2>Halaman ini akan di redirect dalam waktu <p id="timeLeft"></p></h1>
					<h1>Silakan buka email anda lalu konfirmasi akun anda</h1>
				</center>
			</div>
		</div>

		<script type="text/javascript">
			$(document).ready(function() {  
				window.setInterval(function() {
					var timeLeft    = $("#timeLeft").html();                                
					if(eval(timeLeft) == 0){
						window.location= ("<?php echo site_url() ?>");                 
					}else{              
						$("#timeLeft").html(eval(timeLeft)- eval(1));
					}
				}, 5000); 
			});   
		</script>
	</body>
	</html>